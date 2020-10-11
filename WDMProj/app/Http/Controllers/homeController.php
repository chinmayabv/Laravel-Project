<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class homeController extends Controller
{
    public function index(){
        
        $admins = Admin::all();
        foreach($admins as $adm){
            echo $adm->aname;
        }die;
       // return view('NewEvent');
    }
}
