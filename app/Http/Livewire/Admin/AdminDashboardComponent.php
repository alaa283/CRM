<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use Auth;

use Socialite;

use App\Models\User;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard-component' )->layout('layouts.base');
    }

    public function NewUser()
    {
        $request = new Request;
        dd($request);
    }

}
