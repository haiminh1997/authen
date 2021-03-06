<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class CustomerManagerController extends Controller
{
    public  function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $items = DB::table('users')->paginate(8);
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data= array();
        $data['customers']= $items; // truy cập tên biến là tags trong phần view
        return view('admin.content.shop.customer.index',$data);
    }
    public function create(){
        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data= array();
        return view('admin.content.shop.customer.submit',$data);
    }
}
