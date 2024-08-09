<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Room::all();
        return view('room.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomtypes = RoomType::all();
        return view('room.create', ['roomtypes' => $roomtypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'room_detail'=>'required',
        ]);

        if ($request->hasFile('room_view_image')) {
            $imgPath = $request->file('room_view_image')->store('public/imgs');
        } else {
            $imgPath = null;
        }

        $data=new Room;
        $data->room_type_id =$request->rt_id;
        $data->title=$request->title;
        $data->room_detail=$request->room_detail;
        $data->room_view_image=$imgPath;
        $data->save();

        return redirect('admin/room/create')->with('Success', 'Data has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roomtypes = RoomType::all();
        $data = Room::find($id);
        return view('room.show', ['data' => $data, 'roomtypes' => $roomtypes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomtypes = RoomType::all();
        $data = Room::find($id);
        return view('room.edit', ['data' => $data, 'roomtypes' => $roomtypes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title'=>'required',
            'room_detail'=>'required',
        ]);

        if ($request->hasFile('room_view_image')) {
            $imgPath = $request->file('room_view_image')->store('public/imgs');
        } else {
            $imgPath = null;
        }

        $data=Room::find($id);
        $data->room_type_id =$request->rt_id;
        $data->title=$request->title;
        $data->room_detail=$request->room_detail;
        $data->room_view_image=$imgPath;
        $data->save();

        return redirect('admin/room/'.$id.'/edit')->with('Success', 'Data has been updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room::where('id',$id)->delete();
        return redirect('admin/room')->with('Success', 'Data has been deleted.');
    }

    public function filter(Request $request){
        $start_date=$request->input('start_date');
        $end_date=$request->input('end_date');

        $data = Room::where('created_at', '>=', $start_date)->where('created_at', '<=', $end_date)->get();

        return view('room.index', ['data' => $data]);
    }

    public function deleteALl(Request $request)
    {
        $ids=$request->ids;
        Room::whereIn('id', $ids)->delete();
        return response()->json(['Success'=>"Deleted successfully."]);
    }
}
