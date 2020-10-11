<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
class userController extends Controller
{
    
    public function index()
    {
        return view('Admin_login');
    }
    public function checklogin(Request $request){
        $users = User::all();
        $email = $request->input('email');
        $pass = $request->input('pass');
        foreach($users as $usr){
            if($usr->uemail == $email && $usr->upass == $pass){
                $request->session()->put('mail',$email);
                $this->seshEmail = $request->session()->get('mail');
                return redirect('User_dash')->with('email',$this->seshEmail);
            }
        }
        return redirect('Login');
    }
    public function update(Request $request){
        $users = User::all();
        $uemail = $request->session()->get('mail');
        foreach($users as $usr){
            if($usr->uemail == $uemail){
                $name = $request->get('name');
                $pass = $request->get('Password');
                $city = $request->get('Address');
                $phone = $request->get('phone');
                $data = array('uname'=>$name,'upass'=>$pass,'uphone'=>$phone,'ucity'=>$city);
                DB::update(DB::raw("UPDATE User SET uname = '$name',upass='$pass',uphone='$phone',ucity='$city' WHERE uemail='$uemail'"));
                return redirect('User_dash')->with('email',$request->session()->get('mail'));
            }
        }
    }
    public function regEvents(Request $request){
        $data['event'] = Event::all();
        $data['ses'] = $request->session()->get('mail');
        return view('Event_register')->with('data',$data);
    }
    public function register(Request $request,$id){
        $mail = $request->session()->get('mail');
        $data = array('eid'=>$id,'uemail'=>$mail);
        DB::table('EventReg')->insert($data);
        return redirect('Event_register');
    }
    public function manageEvents(Request $request){
        $mail = $request->session()->get('mail');
        $data['event'] = DB::select(DB::raw("SELECT * from Event WHERE eid in(SELECT eid from EventReg WHERE uemail='$mail')"));
        $data['ses']= $mail;
        return view('Events_view')->with('data',$data);
    }
    public function delEvents(Request $request,$id){
        $mail = $request->session()->get('mail');
        DB::delete(DB::raw("DELETE from EventReg WHERE eid = '$id' and uemail = '$mail'"));
        return redirect('Events_view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mainSession(Request $request)
    {   
        return view('User_dash')->with('email',$request->session()->get('mail'));
        
    }
    public function insert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $pass = $request->input('Password');
        $phone = $request->input('phone');
        $city = $request->input('Address');
        $data = array('uname'=>$name,'uemail'=>$email,'upass'=>$pass,'uphone'=>$phone,'ucity'=>$city);
        $request->session()->put('mail',$email);
        $this->seshEmail = $request->session()->get('mail');
        DB::table('User')->insert($data);
        return redirect('User_dash')->with('email',$request->session()->get('mail'));
    }

}
