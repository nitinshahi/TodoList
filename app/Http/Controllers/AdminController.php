<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index()
    {
        return view('adminlogin');
    }

    public function login(Request $request)
    {
        // dd($request);
        if ($request->email == 'admin' && $request->password == 'admin') {
            return redirect('/admin_user');
        } else {
            return 404;
        }
    }
    public function viewuser()
    {
        $users = User::all();
        return view('dashboard.user', ['users' => $users]);
    }

    public function addtask()
    {
        $todo = Todo::all();
        return view('dashboard.task', ['todos' => $todo]);
    }
    public function adduser()
    {
        return view('dashboard.adduser');
    }
}
