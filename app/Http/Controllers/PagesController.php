<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Form;
use App\Models\Showallform;

class PagesController extends Controller
{
    public function form_page()
    {
        return view('pages.form');
    }

    public function showform_page()
    {
        $ShowAllData=DB::table('showallforms')->orderBy('id','desc')->paginate(10);
        return view('pages.showform')->with('alldata',$ShowAllData);
    }
    public function AllAppointmentPage()
    {
        $allAppointmentData=DB::table('appointments')->orderBy('id','desc')->paginate(10);
        return view('pages.AllAppointment')->with('alldata',$allAppointmentData);
    }
    public function aboutme_page()
    {
        return view('pages.aboutme');
    }

    public function readform_page($id)
    {
        return view('pages.readform',[
            'data'=>Showallform::findorFail($id)
        ]);
    }

    public function updateform_page($id)
    {
        return view('pages.updateform',[
            'data'=>Showallform::findorFail($id)
        ]);
    }

    //Action functions
    public function store(Request $request)
    {
        $userid= Auth::user()->id;
        Form::create([
            'user_id'=>$userid,
            'slot'=> $request->slot,
            'day'=> $request->day,
            'class1'=> $request->class1,
            'class2'=> $request->class2,
            'class3'=> $request->class3,
            'comments'=> $request->comment
        ]);
        return redirect(route('showform'))->with('info','Form has been created');
    }

    public function update(Request $request, $id)
    {
        Form::where('id',$id)->update([
            'slot'=> $request->slot,
            'day'=> $request->day,
            'class1'=> $request->class1,
            'class2'=> $request->class2,
            'class3'=> $request->class3,
            'comments'=> $request->comment
        ]);
        return redirect(route('showform'))->with('info','Form has been updated');
    }

    public function destroy($id)
    { 
        Form::destroy($id);
        return redirect(route('showform'))->with('warning','Form has been deleted');
    }
    public function makeAppointmentPage($userId)
    {
        $user = User::find($userId);

        return view('makeAppointment', compact('user'));
    }
    public function submitAppointment(Request $request, $userId)
    {
        $request->validate([
            'selected_person' => 'required',

            'appointment_time' => 'required',
            'appointment_date' => 'required|date',
            'details' => 'required',
        ]);
        $user = User::find($userId);

        Appointment::create([
            'user_id' => $userId,
            'selected_person' => $request->input('selected_person'), 
            'appointment_time' => $request->input('appointment_time'),
            'appointment_date' => $request->input('appointment_date'),
            'details' => $request->input('details'),
        ]);
    
        return redirect()->route('AllAppointmentPage', ['userId' => $userId])->with('success', 'Appointment submitted successfully!');
    }
    
    public function destroyAllAppointment($appointmentId)
    {
        Appointment::destroy($appointmentId);
        return redirect(route('AllAppointmentPage', ['userId' => $appointmentId]))->with('warning', 'Appointment has been deleted');
    }

}
