<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;


class HomeController extends Controller
{
    //
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
                //Fetch all the Doctors from the Doctors Table
            $doctor = doctor::all();
            return view ('user.home',compact('doctor'));
        }


    }

    public function appointment(Request $request)
    {
        $data = new appointment();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->doctor = $request->doctor;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->status = "In Progress";

        if(Auth::id())
        {
            $data->User_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Appointment Request Successfull, We will contact you soon');

    }

    public function myappointment()
    {
        //Only show the appointments when thw user is logged in
        if(Auth::id())
        {
            return view('user.my_appointment');
        }
        else
        {
            return redirect()->back();
        }

    }
}
