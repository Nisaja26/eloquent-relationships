<?php

namespace App\Http\Controllers;

// import model user
use App\Models\User;

// method index kita lakukan get data users dari model
class UserController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get users form Model
        $users = User::latest()->get();

        // kirim data users ke view menggunakkan helper compact
        //passing user to view
        return view('users', compact('users'));
    }
}