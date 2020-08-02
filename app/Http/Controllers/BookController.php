<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\User;

class BookController extends Controller
{
    public function index(User $user){

        $is_icon = false;
        if(Storage::disk('local')->exists('public/icons/'. Auth::id() . '.jpg')){
            $is_icon = true;
        }
        return view('books.index', ['user'=>$user, 'is_icon' => $is_icon]);
    }

    public function create(){
        return view('books.create');
    }
}
