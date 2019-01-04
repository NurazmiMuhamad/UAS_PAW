<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use hash;

class LoginController extends Controller
{
    public function postRegist(Request $request)
    {
    	DB::table('user')->insert([
    		'username'=> $request->username,
    		'email'=> $request->email,
    		'password'=> $request->password,
    		'level'=> $request->level 
    	]);

    	Session::put('level', $request->level);
    	Session::put('username', $request->username);

    	if ($request-> level == 1) {
    		DB::table('freelancer')->insert([
    			'username'=> $request->username,
     			'email'=> $request->email

    		]);
    		return view('employee');
    	} else {
    		DB::table('company')->insert([
    			'username'=> $request->username,
     			'email'=> $request->email
    		]);
    		return view('company');
    	}
    }

    public function doLogin(Request $request)
    {
    	$username = $request->username;
    	$password = $request->password;
    	$data = DB::table('user')->where(['username'=>$username])->first();
    	if ($data != null) {
    		if ($data->password == $password) {
    			Session::put('username', $data->username);
    			Session::put('level', $data->level);
    			if (Session::get('level') == 1) {
    				$job = DB::table('job')
			    	->join('company','job.username_company','=','company.username')
			    	->select('job.*','company.*')
			    	->where(['job.username_company' => $username])
			    	->get();

			    	$kategori = DB::table('kategori')->get();
			    	return view('jobList', ['job'=>$job] ,['kategori'=>$kategori]);
    			} else {
    				$job = DB::table('job')
			    	->join('company','job.username_company','=','company.username')
			    	->select('job.*','company.*')
			    	->where(['job.username_company'=>$username])->get();
    				return view('companyJobList', ['job'=>$job]);
    			}
    			
    		}else{
    			echo "OOPPPSS SALAH PASSWORD";
    		}
    	} else {
    		echo "OOPPSSS SALAH USERNAME";
    	}
    }
    	
}
