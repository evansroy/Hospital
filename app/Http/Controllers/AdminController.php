<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    //Define a function called addView
     public function addView()
     {
        return view ('admin.add_doctor');
     }

     public function upload(Request $request)
     {
        $doctor = new doctor;

        $image = $request->file;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->specialty=$request->specialty;
        // $name = $req->input('name')
        $doctor->room=$request->room;


        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');


     }

     public function showAppointments()
     {
        $data = appointment::All();
        return view('admin.showappointment',compact('data'));
     }

     public function approve($id)
     {
        $data = appointment::find($id);
        $data->status = "Approved";
        $data->save();

        return redirect()->back();
     }

     public function cancel($id)
     {
        $data = appointment::find($id);
        $data->status = 'Cancelled';
        $data->save();

        return redirect()->back();
     }

     public function showDoctor()
     {
        $data = doctor::all();
        return view('admin.showdoctor',compact('data'));
     }
}
