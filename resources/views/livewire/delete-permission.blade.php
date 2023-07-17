<div>
    <x-confirmation-modal wire:model="confirmingPermissionDeletion">
        <x-slot name="title">
            Delete Permission
        </x-slot>

        <x-slot name="content">
            Are you sure you want to delete this?
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingPermissionDeletion')" wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="deletePermission" wire:loading.attr="disabled">
                Delete
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>


    <x-danger-button wire:click="deletingPermission" class="m-2">
        {{ __('Delete') }}
    </x-danger-button>
</div>
