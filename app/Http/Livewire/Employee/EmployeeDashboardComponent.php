<?php

namespace App\Http\Livewire\Employee;

use Livewire\Component;

use Auth;

use Socialite;

use App\Models\User;

class EmployeeDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.employee.employee-dashboard-component')->layout('layouts.base');
    }

    public function users()
    {
        $user = new User;
        $user = $user->all();
        return view('livewire.employee.get_users', ["data"=>$user])->layout('layouts.base');
    }
}
