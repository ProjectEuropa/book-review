<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    public function index(){
        return view('profiles.index');
    }

    public function store(ProfileRequest $request, User $user){
        $path = $request->icon->storeAs('public/icons', Auth::id() . '.jpg');
        $image_name = basename($path);
        $user->icon = $image_name;
        $user->save();

        $is_icon = true;
        
        return redirect()->route('books.index',['user'=>$user, 'is_icon'=>$is_icon])->with('success', '新しい画像を設定しました。');
    }
}
