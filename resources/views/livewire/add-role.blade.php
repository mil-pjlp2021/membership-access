<div class="max-w-full">
    <!-- Button trigger modal -->
    <x-button wire:click="addingRole" class="m-2">
        @if($name)
        <i class="fas fa-edit">Edit</i>
        @else
        {{ __('Tambah Role') }}
        @endif
    </x-button>

    <x-dialog-modal wire:model="addRoleModal">
        <x-slot name="title">
            Add Role
        </x-slot>

        <x-slot name="content">
            <x-form-section submit="">
                <x-slot name="title">
                    {{ __('Role') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Input Role Name') }}
                </x-slot>
                <x-slot name="form">
                    <div class="col-span-8 sm:col-span-4">
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" autocomplete="name" />
                        <x-input-error for="name" class="mt-2" />
                    </div>
                </x-slot>
            </x-form>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('addRoleModal')" wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>

            <x-button class="ml-2" wire:click="add" wire:loading.attr="disabled">
                Save
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
