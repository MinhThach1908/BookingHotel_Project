<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Customer::all();
        return view('customer.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
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
            'full_name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);

//        if($request->hasFile('photo')){
//            $imgPath=$request->file('photo')->store('imgs', 'public');
//        }else{
//            $imgPath=null;
//        }

        $data=new Customer;
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->password=sha1($request->password);
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->photo='na';
        $data->save();

        $ref=$request->ref;
        if($ref=='front'){
            return redirect('register')->with('Success','Data has been saved.');
        }

        return redirect('admin/customer/create')->with('Success','Data has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Customer::find($id);
        return view('customer.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Customer::find($id);
        return view('customer.edit',['data'=>$data]);
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
            'full_name'=>'required',
            'email'=>'required|email',
        ]);

//        if($request->hasFile('photo')){
//            $imgPath=$request->file('photo')->store('imgs', 'public');
//        }else{
//            $imgPath=$request->prev_photo;
//        }

        $data=Customer::find($id);
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->photo='na';
        $data->save();

        return redirect('admin/customer/'.$id.'/edit')->with('Success','Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::where('id',$id)->delete();
        return redirect('admin/customer')->with('Success','Data has been deleted.');
    }

    public function deleteALl(Request $request)
    {
        $ids=$request->ids;
        Customer::whereIn('id', $ids)->delete();
        return response()->json(['Success'=>"Deleted successfully."]);
    }
}
