<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\hslop;

class CommentController extends Controller
{
    //
    public function getDanhSach()
    {
    	$comment = DB::table('hs-lops') ->join('hocsinhs' , 'hocsinhs.id' , '=' , 'hs-lops.mahs')
    	->join('lops', 'lops.id', '=' , 'hs-lops.malop')
    	->get();
    	$result = json_decode($comment, true);
    	// var_dump($result); die;
    	return view('admin.comment.danhsach',['comment'=>$comment]);

    }
}
