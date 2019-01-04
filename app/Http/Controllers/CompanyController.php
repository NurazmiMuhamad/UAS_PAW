<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;


class CompanyController extends Controller
{
    public function updateProfileCompany(Request $request)
    {
    	$username = Session::get('username');
    	DB::table('company')->where(['username'=>$username])
    	->update([
    		'nama_perusahaan'=>$request->nama_perusahaan,
    		'alamat_perusahaan'=>$request->alamat_perusahaan,
    		'tanggal_berdir'=>$request->tanggal_berdiri,
    		'no_tlp'=>$request->no_tlp,
    		'email'=>$request->email,
    		'desc_perusahaan'=>$request->desc_perusahaan
    	]);

    	return view('index');
    }

    public function postJob()
    {
    	$kategori = DB::table('kategori')->get();
    	return view('postJob',['kategori'=>$kategori]);
    }

    public function doPostJob(Request $request)
    {
    	$username = Session::get('username');

    	DB::table('job')->insert([
    		'judul_job'=>$request->title,
    		'type_job'=>$request->type,
    		'kategori_job'=>$request->kategori,
    		'currency'=>$request->currency,
    		'payment'=>$request->payment,
    		'lokasi'=>$request->address,
    		'desc_job'=>$request->desc,
    		'username_company'=>$username
    	]);

    	return view('index');
    }

    public function myJob()
    {
    	$username = Session::get('username');

    	$job = DB::table('job')
    	->join('company','job.username_company','=','company.username')
    	->select('job.*','company.*')
    	->where(['job.username_company'=>$username])->get();
    	return view('companyJobList', ['job'=>$job]);
    }
}
