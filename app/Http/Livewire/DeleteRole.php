<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class DeleteRole extends Component
{
    public $confirmingRoleDeletion;
    public $role;

    public function deletingRole(){
        $this->confirmingRoleDeletion = true;
    }

    public function mount($id){
        if ($id) {
            // dd($id);
            $this->role = Role::findOrFail($id);
        }
        $this->confirmingRoleDeletion = false;
    }

    public function deleteRole(){
        if ($this->role) {
            if ($this->role->delete()) {
                return redirect()->route('roles.index')->with('success','Success');
            }
            return redirect()->route('roles.index')->with('error','Fail');
        }

    }
    public function render()
    {
        return view('livewire.delete-role');
    }
}
