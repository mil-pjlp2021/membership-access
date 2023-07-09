<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-4">
                    @livewire('add-role',['name'=>''])
                </div>
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light border-collapse border border-slate-500">
                            <thead class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                <tr>
                                    <th scope="col" class="px-6 border-r dark:border-neutral-500 py-4">#</th>
                                    <th scope="col" class="px-6 border-r dark:border-neutral-500 py-4">Role Name</th>
                                    <th scope="col" class="px-6 border-r dark:border-neutral-500 py-4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $key => $value)
                                <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600  dark:text-white">
                                    <td class="whitespace-nowrap px-6 border-r dark:border-neutral-500 py-4">{{ $key+1 }}</td>
                                    <td class="whitespace-nowrap px-6 border-r dark:border-neutral-500 py-4">{{ $value->name }}</td>
                                    <td class="whitespace-nowrap px-6 border-r dark:border-neutral-500 py-4">
                                        <div class="inline-flex">
                                            <div>
                                                @livewire('add-role',['name'=>$value->name],key('item-'.$value->id.''.time()))
                                            </div>
                                            <div>
                                                @livewire('delete-role',['id'=>$value->id],key('item-'.$value->id.''.time()))
                                            </div>
                                        </div>
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
