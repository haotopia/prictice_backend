<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            //从excell中导入学生信息
            'stu_id'=>$row[0],
            'name'=>$row[1],
            'password'=>bcrypt('123456'),
            'created_at'=>Carbon::create(substr($row[0],0,4),9,1),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
