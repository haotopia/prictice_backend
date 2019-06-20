<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\PracticeRequest;
use Illuminate\Http\Request;

use App\Practice;
class PracticeController extends Controller
{
    public function store(PracticeRequest $request){
        $data=$request->all();
        return $data;
        Practices::create($data);
        return [];
    }

    public function listPra(Request $request){
        $stu_id=$request->stu_id;
        $list=DB::table('user_2_practice')->select('theme_id')->where('stu_id',$stu_id)->get();
        return $list;
        foreach($list as $k){
        }
    }
    public function makePdf(){
        $pdf = new PDF();
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
    }
}
