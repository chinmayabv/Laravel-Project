<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Event;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
use Validator;
use Auth;
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin_login');
    }
    public function checklogin(Request $request){
        $admins = Admin::all();
        $email = $request->input('email');
        $pass = $request->input('pass');
        foreach($admins as $adm){
            if($adm->aemail == $email && $adm->apass == $pass){
                $request->session()->put('mail',$email);
                return redirect('AdminPage')->with('email',$request->session()->get('mail'));
            }
        }
        echo("Unsuccessful login");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    public function insert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $pass = $request->input('password');
        $city = $request->input('City');
        $data = array('aname'=>$name,'aemail'=>$email,'apass'=>$pass,'acity'=>$city);
        $request->session()->put('mail',$email);
        DB::table('Admin')->insert($data);
        return redirect('AdminPage')->with('email',$request->session()->get('mail'));
    }
    public function manageUsers(Request $request){
        $data['users'] = User::all();
        $data['ses'] = $request->session()->get('mail');
        return view('A_manage_users')->with('data',$data);
    }
    public function manageEvents(Request $request){
        $data['event'] = Event::all();
        $data['ses'] = $request->session()->get('mail');
        return view('A_manage_events')->with('data',$data);
    }
    public function viewPage(Request $request){
        return view('AdminPage')->with('email',$request->session()->get('mail'));   
    }
    public function delUser(Request $request,$id){
        DB::delete(DB::raw("DELETE from User WHERE uid = '$id'"));
        return redirect('/A_manage_users');
    }
    public function insertEvent(Request $request){
        $name = $request->input('Eventname');
        $place = $request->input('Place');
        $date = $request->input('Dateofbirth');
        $time = $request->input('time');
        $cont = $request->input('description');
        $dt = $date.$time;
        $data = array('title'=>$name,'date'=>$dt,'content'=>$cont,'place'=>$place);
        DB::table('Event')->insert($data);
        return redirect('/A_manage_events');
    }
    public function delEvent(Request $request,$id){
        DB::delete(DB::raw("DELETE from Event WHERE eid = '$id'"));
        return redirect('/A_manage_events');
    }

}
