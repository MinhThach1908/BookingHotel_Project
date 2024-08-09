<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Feedback;
use Cookie;

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
        $admin=Admin::where(['username'=>$request->username, 'password'=>sha1($request->password)])->count();
        if($admin > 0) {
            $adminData = Admin::where(['username' => $request->username, 'password' => sha1($request->password)])->get();
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
}
