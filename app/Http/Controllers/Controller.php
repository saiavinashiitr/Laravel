<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
    	$name = $req->input('name');
    	$email = $req->input('email');


        //print_r($email);exit();


    	//$data = array('name'=>$name,"email"=>$email);
		//DB::table('infoo')->insert($data);
    	DB::table('infoo')->insert( array(   'name'=>$name,"email"=>$email)     );


    	echo "Success";
    }

    function login(Request $req)
    {
    	  $name = $req->input('name');
    	  $email = $req->input('email');


          //print_r($email);exit();


    	  //$data = array('name'=>$name,"email"=>$email);
		  //DB::table('infoo')->insert($data);
    	  //DB::table('infoo')->insert( array(   'name'=>$name,"email"=>$email)     );

    	
	      $checkLogin = DB::table('infoo')->where(['name'=>$name,'email'=>$email])->get();
	      $hmm =  count($checkLogin);
	      if(count($checkLogin))
	      {
	        echo "Login SuccessFull<br/>";
	        //echo $hmm;
	      }
	      else
	      {
	        echo "Login Faield Wrong Data Passed";
	        //echo $hmm;
	      }
	      
    }

    function display()
    {
    	$data['databitch']= DB::table('infoo')->get();
    	// $data['er']= DB::table('grr')->get();
    	// $data= DB::table('7ui7y7yu')->get();
    	// $data= DB::table('infoo')->get();
    	// $data= DB::table('infoo')->get();
    	// $data= DB::table('infoo')->get();
    	return view('display')->with($data);

    }
}
