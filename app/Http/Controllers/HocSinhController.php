<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hocsinh;
use Illuminate\Support\Facades\DB;

class HocSinhController extends Controller
{
    //
    public function getDanhSach()
    {
    	$students = hocsinh::all();
    	return view('admin.students.danhsach',['students'=>$students]);	
    }
    public function postThem(Request $request){
        
        $hocsinhs = new hocsinh;
        $hocsinhs->tenhs = $request->HocSinh;
        $hocsinhs->ngaysinh = $request->birthday;
        $hocsinhs->gioitinh = $request->gt;
        $hocsinhs->dantoc = $request->general;
        $hocsinhs->quequan = $request->country;
        $hocsinhs->save();
        
        return redirect('admin/students/them')->with('thongbao','Them thanh cong');
    }
    public function getThem(){
        $students = hocsinh::all();
        return view('admin/students/them');
    }
    public function getXoa($id)
    {
        $students = hocsinh::find($id);
        $students->delete();
        return back();

        // return redirect('')->action('HocSinhController@getDanhSach')->with('thongbao','Ban da xoa thanh cong');
        
    }
}
