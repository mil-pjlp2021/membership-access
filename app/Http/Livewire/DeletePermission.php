<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class DeletePermission extends Component
{
    public $confirmingPermissionDeletion;
    public $permission;

    public function deletingPermission(){
        $this->confirmingPermissionDeletion = true;
    }

    public function mount($id){
        if ($id) {
            // dd($id);
            $this->permission = Permission::findOrFail($id);
        }
        $this->confirmingPermissionDeletion = false;
    }

    public function deletePermission(){
        if ($this->permission) {
            if ($this->permission->delete()) {
                return redirect()->route('permissions.index')->with('success','Success');
            }
            return redirect()->route('permissions.index')->with('error','Fail');
        }

    }
    public function render()
    {
        return view('livewire.delete-permission');
    }
}
