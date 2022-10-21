<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('users/index');
    }

    public function show()
    {
        return view('users/show');
    }
    
    public function withdrawal()
    {
        $enrollment_management = app()->make('enrollmentManagement');
        $enrollment_management->update(Auth::user()->id);
        
        Auth::logout();
    }

    public function destroy(User $user)
    {
        $user::where('id', '=', Auth::user()->id)->delete();
        $this->withdrawal();

        return redirect('/');
    }
}