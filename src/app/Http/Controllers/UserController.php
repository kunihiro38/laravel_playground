<?php
namespace App\Http\Controllers;
class UserController extends Controller
{
    public function index()
    {
        $name = 'World!!';

        return view('user', ['name' => $name]);
    }
}