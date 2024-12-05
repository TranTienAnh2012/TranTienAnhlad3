<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TenController extends Controller
{
    public function index()
    {
        return 'Tran Tien Anh';
    }
    public function create() 
    {
        // Trả về view có tên create trong thư mục \\resources\views\account-create.blade.php
        return view('create-account');
    }
    public function showData()
    {
        $data = array('2310900005','codemaster');
        return view('create-show',['ttadata'=> $data]);
    }
    public function list()
    {   //Nhap Du Lieu
        $data = array(
            ["id"=>2310900005,"usename"=>"TienAnh","password"=>"20122005@","fullname"=>"TranTienAnh"],
            ["id"=>2310900007,"usename"=>"TienAnh","password"=>"20122005@","fullname"=>"TranTienAnh"]
              
        );
        //Tra ve du lieu
        return view('tta_account-list',['TTadata'=>$data]);
    }
    public function getAllaccount()
    {
        $data = DB::table('tta_acount')->get();
        return view('tta-account-getall',['TTadata'=>$data]);
    }
}
