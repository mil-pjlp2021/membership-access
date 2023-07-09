<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class AddRole extends Component
{
    public $addRoleModal;
    public $name;
    public $role;

    public function addingRole(){
        $this->addRoleModal = true;
    }

    public function mount($name){
        if ($name) {
            $this->name = $name;
            $this->role = Role::where('name',$name)->first();
        }
        $this->addRoleModal = false;

    }

    public function add(){
        if ($this->name) {
            if ($this->role) {
                $this->role->name = $this->name;
                $role = $this->role->save();
            }else{
                $role = Role::create(['name'=>$this->name]);
            }
            if ($role) {
                return redirect()->route('roles.index');
            }
        }
    }

    public function render()
    {
        return view('livewire.add-role');
    }
}
