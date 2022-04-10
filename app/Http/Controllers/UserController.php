<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Livewire\Component;

use Auth;

use Socialite;

use App\Models\User;

use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    //

    public function NewUser()
    {
        $request = new Request;
        $user = new User;

        $user=User::create([
            'name' =>  request()->input('name'),
           'email'=> request()->input('email'),
         'password'=>bcrypt('password'),
         'utype'=> request()->input('utype'),
        ]);

        $user->save();
        return view('livewire.admin.admin-dashboard-component')->layout('layouts.base');
    }

    public function NewCustomer()
    {
        $request = new Request;
        $user = new User;

        $user=User::create([
            'name' =>  request()->input('name'),
           'email'=> request()->input('email'),
         'password'=>bcrypt('password'),
         'utype'=> request()->input('utype'),
        ]);

        $user->save();
        return view('livewire.employee.employee-dashboard-component')->layout('layouts.base');
    }
}
