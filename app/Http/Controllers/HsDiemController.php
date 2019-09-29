<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\hsdiem;

class HsDiemController extends Controller
{
    //
    public function getDanhSach()
    {
        $studyresult = DB::table('hs-diems') ->join('giaoviens', 'giaoviens.id', '=', 'hs-diems.magv')
        ->join('hocsinhs', 'hocsinhs.id', '=', 'hs-diems.mahs')
        ->join('mons','mons.id', '=' , 'hs-diems.mamon')
        ->join('baikts', 'baikts.id', '=' , 'hs-diems.mabaikt')
        ->get(); 
        $result = json_decode($studyresult, true);
        // var_dump($result);      die;
        return view('admin.studyresult.danhsach',['studyresult'=>$studyresult]);	
    }
}
