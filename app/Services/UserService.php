<?php

namespace App\Services;

use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserService
{
    public function store($data)
    {
        try{
            DB::beginTransaction();

            $password = Str::random(10);//Генерируем пароль
            $data['password'] = Hash::make($password);//Добавляем хэш пароля в БД

            $user = User::firstOrCreate(['email'=>$data['email']],$data);

            Mail::to($data['email'])->send(new PasswordMail($password));//отправляем письмо с паролем
            event(new Registered($user));

            DB::commit();
        } catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $user)
    {
        try{
            DB::beginTransaction();

            $user->update($data);

            DB::commit();
        } catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }

    }
}
