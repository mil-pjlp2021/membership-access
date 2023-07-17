<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermissionForm extends Component
{
    public $addPermissionModal;
    public $name;
    public $permission;

    public function addingPermission(){
        $this->addPermissionModal = true;
    }

    public function mount($name){
        if ($name) {
            $this->name = $name;
            $this->permission = Permission::where('name',$name)->first();
        }
        $this->addPermissionModal = false;

    }

    public function add(){
        if ($this->name) {
            if ($this->permission) {
                $this->permission->name = $this->name;
                $permission = $this->permission->save();
            }else{
                $permission = Permission::create(['name'=>$this->name]);
            }
            if ($permission) {
                return redirect()->route('roles.index');
            }
        }
    }
    public function render()
    {
        return view('livewire.permission-form');
    }
}
