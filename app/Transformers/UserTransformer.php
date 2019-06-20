<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'sex' => $user->sex,
            'political_profile' => $user->political_profile,
            'contact' => $user->contact,
            'family' => $user->family,
            'grade' => $user->grade,
            'class' => $user->class,
            'stu_id'=>$user->stu_id,
        ];
    }
}