<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::get();
        $count_livros = Livro::count();
        return view('home1', compact('count_livros','user'));
    }
}
