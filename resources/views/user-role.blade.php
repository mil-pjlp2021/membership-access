<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('user-role-form',['user'=>''])
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 border-r dark:border-neutral-500 py-4">#</th>
                                    <th scope="col" class="px-6 border-r dark:border-neutral-500 py-4">User Name</th>
                                    <th scope="col" class="px-6 border-r dark:border-neutral-500 py-4">User Role</th>
                                    <th scope="col" class="px-6 border-r dark:border-neutral-500 py-4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $value)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $key+1 }}</td>
                                    <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $value->name }}</td>
                                    <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $value->getRoleNames() }}</td>
                                    <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                        @livewire('user-role-form',['user'=>$value->id],key('item-'.$value->id.''.time()))
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
        </div>
    </div>
</x-app-layout>
