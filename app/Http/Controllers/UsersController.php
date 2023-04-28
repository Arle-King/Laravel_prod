<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Larave_Users;

class UsersController extends Controller
{
    public function users(Request $arr) {

        $data = new Larave_Users();


        $data->mail = $arr->input('mail');
        $data->surname = $arr->input('surname');
        $data->name = $arr->input('name');
        $data->patronymic = $arr->input('patronymic');
        $data->series = $arr->input('series');
        $data->number = $arr->input('number');
        $data->password = $arr->input('password');

        $data->save();
        return redirect()->route('Authorization'); //view('Account', ['data' => $data]);
    }

    public function allUsers(Request $arr) {
        $user = new Larave_Users();

        $mail = $arr['mail'];
        $password = $arr['password'];
        return view('Account', ['data' => $user->where('mail', '=', $mail)->where('password', '=', $password)->get()]);
    }

    public function modification(Request $arr){
        //dd($arr);
        $use = Larave_Users::find($arr->input('id'));
        //$data = $use->find($arr->input('id'));//where('id', '=', "$arr->input('id)")->get();

        $use->id = $arr->input('id');
        $use->mail = $arr->input('mail');
        $use->surname = $arr->input('surname');
        $use->name = $arr->input('name');
        $use->patronymic = $arr->input('patronymic');
        $use->series = $arr->input('series');
        $use->number = $arr->input('number');

        $use->save();
        return redirect()->route('Account', ['data' => $use]);//view('Account', ['data'=>$use]);
    }
}
