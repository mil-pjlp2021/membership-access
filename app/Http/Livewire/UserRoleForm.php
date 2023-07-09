<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserRoleForm extends Component
{
    public $addUserRoleModal;
    public $user;
    public $fusers;
    public $roles;
    public $role;

    protected $rules = [
        'role' => 'required'
    ];

    public function addingRole(){
        $this->addUserRoleModal = true;
    }

    public function mount($user){
        if ($user) {
            $this->user = User::find($user)->id;
            $this->role = User::find($user)->roles;
        }
        $this->addUserRoleModal = false;
        $this->fusers = User::select('id','name')->get()->toArray();
        // dd($this->fusers);
        $this->roles = Role::all();
    }

    public function add(){
        if ($this->user) {
            User::find($this->user)->syncRoles($this->role);
            return redirect()->route('userroles.index');
        }
    }
    public function render()
    {
        return view('livewire.user-role-form');
    }
}
