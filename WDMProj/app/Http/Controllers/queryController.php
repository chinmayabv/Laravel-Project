<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
class queryController extends Controller
{
    public function insert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $title = $request->input('Asunto');
        $des = $request->input('Asunto1');
        $data = array('Name'=>$name,'Email'=>$email,'Subject'=>$title,'descript'=>$des);
        $this->seshEmail = $request->session()->get('mail');
        DB::table('Query')->insert($data);
        return redirect('ContactUs');
    }
}
