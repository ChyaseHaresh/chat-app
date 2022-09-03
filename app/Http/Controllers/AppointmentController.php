<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Staff;
use App\Models\Book;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Staff::all();
    $result2['data2']=Appointment::all();


        return view('admin.appointment', $result, $result2);

    }
    public function add_appointment_process(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $model=new Appointment();

        $model->staff_name=$request->post('name');
        $model->start_date=$request->post('sdate');
        $model->start_time=$request->post('stime');
        $model->end_date=$request->post('edate');
        $model->end_time=$request->post('etime');

        $model->save();
        $request->session()->flash('message',"Staff Added Successfully");
        return redirect('admin/appointment');
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit( $status, $id)
    {
        $model=Book::find($id);
        $model->status=$status;
        $model->save();
        // $request->session()->flash('message','Category status updated');
        return redirect('admin/dashboard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
