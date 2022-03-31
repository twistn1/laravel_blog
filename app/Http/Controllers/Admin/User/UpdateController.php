<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }

    public function messages(){
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Это поле должно быть строкой',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Это поле должно быть строкой',
            'email.email' => 'Почта должна соответствовать формату mail@domain',
            'email.unique' => 'Пользователь с таким email уже существует',

        ];
    }



}
