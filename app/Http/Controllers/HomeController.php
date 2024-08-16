<?php

namespace App\Http\Controllers;
use App\Models\Gallary;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\RoomType;
class HomeController extends Controller
{
    public function room_details($id)
    {
        $room = Room::find($id);

        return view('home.room_details',compact('room'));

    }

    public function add_booking(Request $request, $id)
    {
        $request->validate([

            'startDate' => 'required|date',

            'endDate' => 'required|after:startDate',

        ]);

        $data = new Booking;
        $data->customer_id = $request->customer_id;
        $data->room_id = $request->room_id;
        $data->checkin_date = $request->checkin_date;
        $data->checkout_date = $request->checkout_date;
        $data->total_adults = $request->total_adults;
        $data->total_children = $request->total_children;
        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $isBooked = Booking::where('room_id',$id)
            ->where('checkin_date','<=',$endDate)
            ->where('checkout_date','>=',$startDate)->exists();

        if($isBooked)
        {
            return redirect()->back()->with('message','Room is already booked please try different date');
        }

        else
        {
            $data->checkin_date = $request->startDate;

            $data->checkout_date = $request->endDate;
        }

        $data->save();

        return redirect()->back()->with('message','Booking Successful');

    }

    public  function our_rooms()
    {
        $room = Room::all();
        return view('home.our_rooms',compact('room'));
    }

    public function search_rooms(Request $request)
    {
        $start_date = Carbon::parse($request->startDate)->format('Y-m-d');
        $end_date = Carbon::parse($request->endDate)->format('Y-m-d');
        $adults = $request->adults;
        $children = $request->children;

        $room = Room::where('total_adults', '>=', $adults)
            ->where('total_children', '>=', $children)
            ->whereDoesntHave('bookings', function ($query) use ($start_date, $end_date) {
                $query->where(function ($q) use ($start_date, $end_date) {
                    $q->where('checkin_date', '<=', $end_date)
                        ->where('checkout_date', '>=', $start_date);
                });
            })
            ->get();
        return view('home.our_rooms', ['room' => $room]);
    }

    public function hotel_gallary()
    {
        $gallary = Gallary::all();
        return view('home.hotel_gallary',compact('gallary'));
    }

    public function home()
    {
        $room = Room::all();

        $gallary = Gallary::all();

        return view('home.index',compact('room','gallary'));
    }

}
