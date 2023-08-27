<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:isRoot,user')->only(['with', 'without']);
    }

    public function index()
    {
        return view('home');
    }

    public function main(){
        return view('main');
    }

    public function with(User $user){
        return view('success');
    }

    
    public function without($user){
        $user = User::find($user);
        return view('success');
    }
}
