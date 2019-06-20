<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\Api\UserRequest;

use App\Handlers\ExcelHandler;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Transformers\UserTransformer;

class UsersController extends Controller
{
    //

    public function me()
    {
        return $this->response->item($this->user(), new UserTransformer());
    }

    public function importUserFromExcel(UserRequest $request,ExcelHandler $update){
        $xls=$update->saveExcel($request->xls,'user','DB');

        Excel::import(new UsersImport, $xls['path']);
        return [
            'status'=>1,
            'message'=>'导入成功',
        ];
    }

    public function change(UserRequest $request){
        return $request->all();
        $user=$this->user();
        return $user->id;
    }

}
