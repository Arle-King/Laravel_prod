<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Users_DB;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegRequest;

class UsersDBController extends Controller {

  public function inp(LoginRequest $arr) {    // поиск аккаунта по входным данным
    
    $user = Users_DB::where('mail', '=', $arr['mail_Auth'])->where('password', '=', md5($arr['pass_Auth']))->get('id');


    if (strlen($user) == 2) {
      return view('Authorization');
    } else if (strlen($user) == 10) {
      return redirect('/Account/' . $user[0]['id']);
    } else {
      echo 'а что ?';
    }

  }

  public function OnePerson($id) {  //показ аккаунта
    return view('Account', ['data' => Users_DB::find($id)]);
  }

  public function registr(RegRequest $arr) {  // регистрация пользователя
    $user_reg = new Users_DB();

    //сделать проверку на уникальность почты



    $pass = "";  // надо вынести в отдельную функцию
  
    for ($i = 0; $i <= rand(5,11); $i++) {
      switch(rand(1,3)) {
        case 1: {
          $pass = $pass . chr(rand(48,57));
        } break;
        case 2: {
          $pass = $pass . chr(rand(65,90));
        } break;
        case 3: {
          $pass = $pass . chr(rand(97,122));
        } break;
      }
    }



    $user_reg->mail = $arr->input('mail');
    $user_reg->surname = $arr->input('surname');
    $user_reg->name = $arr->input('name');
    $user_reg->patronymic = $arr->input('patronymic');
    $user_reg->series = $arr->input('series');
    $user_reg->number = $arr->input('number');
    $user_reg->password = md5($pass);

    mail('leps-grishca@mail.ru','the subject','Пароль для почты'. $arr->input('mail_reg') . ':' . $pass);

    

    $user_reg->save();

    return redirect()->route('Authorization');
  }

  public function mod(RegRequest $arr) {  // модификация данных пользователя
    $user = Users_DB::find($arr['id']);
    $save = false;

    if ($arr['mail'] != $user->mail) {
      $user->mail = $arr['mail'];
      $save = true;
    }

    if ($arr['surname'] != $user->surname) {
      $user->surname = $arr['surname'];
      $save = true;
    }

    if ($arr['name'] != $user->name) {
      $user->name = $arr['name'];
      $save = true;
    }

    if ($arr['patronymic'] != $user->patronymic) {
      $user->patronymic = $arr['patronymic'];
      $save = true;
    }

    if ($arr['series'] != $user->series) {
      $user->series = $arr['series'];
      $save = true;
    }

    if ($arr['number'] != $user->number) {
      $user->number = $arr['number'];
      $save = true;
    }

    if ($save == true) {
      $user->save();
    }
    return redirect('/Account/' . $user->id);
  }

  public function del($id) { // удаление аккаунта
    $user = Users_DB::find($id);
    $user->delete();
    return redirect()->route('Authorization');
  }
}
  