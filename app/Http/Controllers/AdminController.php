<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Feedback;
use App\Models\Booking;
use Cookie;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Login
    function login(){
        return view('login');
    }

    //Check Login
    function check_login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $admin=Admin::where(['username'=>$request->username, 'password'=>$request->password])->count();
        if($admin > 0) {
            $adminData = Admin::where(['username' => $request->username, 'password' => $request->password])->get();
            session(['adminData' => $adminData]);

            if ($request->has('rememberme')) {
                Cookie::queue('adminuser',$request->username, 1440);
                Cookie::queue('adminpwd',$request->password, 1440);
            }

            return redirect('admin');
        } else {
            return redirect('admin/login')->with('msg', 'Invalid Username or Password. Please try again');
        }
    }

    // Logout
    function logout(){
        session()->forget(['adminData']);
        return redirect('admin/logout');
    }

    function feedbacks()
    {
        $data = Feedback::all();
        return view('admin_feedbacks', ['data'=>$data]);
    }

    function destroy_feedback($id)
    {
        Feedback::where('id', $id)->delete();
        return redirect('admin/feedbacks')->with('Success', 'Data has been deleted');
    }

    public function deleteALl(Request $request)
    {
        $ids=$request->ids;
        Feedback::whereIn('id', $ids)->delete();
        return response()->json(['Success'=>"Deleted successfully."]);
    }

    function dashboard(){
        // Area Chart
        $bookings = Booking::selectRaw('count(id) as total_bookings,checkin_date')->groupBy('checkin_date')->get();

        $labels=[];
        $data=[];
        foreach($bookings as $booking){
            $labels[]=$booking['checkin_date'];
            $data[]=$booking['total_bookings'];
        }

        // Pie Chart
        $rtbookings=DB::table('room_types as rt')
            ->join('rooms as r', 'r.room_type_id', '=', 'rt.id')
            ->join('bookings as b' , 'b.room_id', '=', 'r.id')
            ->select('rt.*', 'r.*', 'b.*', DB::raw('count(b.id) as total_bookings'))
            ->groupBy('r.room_type_id')
            ->get();
        $plabels=[];
        $pdata=[];
        foreach($rtbookings as $rtbooking){
            $plabels[]=$rtbooking->title;
            $pdata[]=$rtbooking->total_bookings;
        }

//        echo '<pre>';
//        print_r($rtbookings);

        return view('dashboard', ['labels'=>$labels, 'data'=>$data, 'plabels'=>$plabels, 'pdata'=>$pdata]);
    }
}
