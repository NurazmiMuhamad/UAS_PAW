<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class FreelancerController extends Controller
{
    public function updateProfileFreelancer(Request $request)
    {
    	$username = Session::get('username');

    	DB::table('freelancer')->where(['username'=>$username])
    	->update([
    		'nama_depan'=>$request->first_name,
    		'nama_belakang'=>$request->last_name,
    		'tempat_lahir'=>$request->tempat_lahir,
    		'tanggal_lahir'=>$request->tanggal_lahir,
    		'jenis_kelamin'=>$request->jk,
    		'agama'=>$request->agama,
    		'alamat'=>$request->alamat,
    		'no_telp'=>$request->no_telp,
    		'email'=>$request->email,
    		'kewarganegaraan'=>$request->kewarganegaraan,
    		'tinggi_badan'=>$request->tinggi_badan,
    		'berat_badan'=>$request->berat_badan
    	]);

    	return view('index');
    }

    public function jobList()
    {
    	$job = DB::table('job')
    	->join('company','job.username_company','=','company.username')
    	->select('job.*','company.*')
    	->get();

    	$kategori = DB::table('kategori')->get();
    	return view('joblist', ['job'=>$job] ,['kategori'=>$kategori]);
    }

     public function MyjobList()
    {
    	$username = Session::get('username');

    	$job = DB::table('job')
    	->join('company','job.username_company','=','company.username')
    	->join('apply','job.id_job','=','apply.id_job')
    	->select('job.*','company.*')
    	->where(['apply.username' => $username])
    	->get();

    	$kategori = DB::table('kategori')->get();
    	return view('MyjobList', ['job'=>$job] ,['kategori'=>$kategori]);
    }

    public function apply($id)
    {
    	$username = Session::get('username');

    	DB::table('apply')->insert([
    		'username'=>$username,
    		'id_job'=>$id
    	]);

    	$job = DB::table('job')
    	->join('company','job.username_company','=','company.username')
    	->select('job.*','company.*')
    	->get();

    	$kategori = DB::table('kategori')->get();
    	return view('joblist', ['job'=>$job] ,['kategori'=>$kategori]);
    }
}
