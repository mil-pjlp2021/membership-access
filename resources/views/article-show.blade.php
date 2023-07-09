<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Artikel') }}
        </h2>
    </x-slot>
    {{--  @dump($artikel)  --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-2">
                <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-4">
                        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">{{ $artikel->title }}</h1>
                    </div>
                    <div class="p-4">
                        <img class="rounded-t-lg max-w-full" src="{{ $artikel->img }}" alt="" />

                    </div>
                    <div class="p-4">
                        <p class="mb-3 text-gray-600 dark:text-gray-400">{{ $artikel->content }}</p>
                        {{--  <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>  --}}
                    </div>
                </div>


                {{--  <h2 class="font-semibold text-lg ml-4 mt-3">
                    {{ $article->title }}
                </h2>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
                    {!! $article->content !!}
                </div>  --}}


            </div>
        </div>

    </div>
</x-app-layout>
