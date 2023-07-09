<div>
    <x-confirmation-modal wire:model="confirmingRoleDeletion">
        <x-slot name="title">
            Delete Role
        </x-slot>

        <x-slot name="content">
            Are you sure you want to delete this?
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingRoleDeletion')" wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="deleteRole" wire:loading.attr="disabled">
                Delete
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>


    <x-danger-button wire:click="deletingRole" class="m-2">
        {{ __('Delete') }}
    </x-danger-button>

</div>
