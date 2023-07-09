<div>
    <h2 class="font-semibold text-lg ml-4 mt-3 text-slate-900 dark:text-slate-50">
        Artikel
    </h2>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-3">
        {{--  dd($articles)  --}}
        <tbody>
            @foreach($articles as $key => $article)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-20 p-4">
                    <img src="{{ $article->img }}" class="rounded-lg" alt="" srcset="">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{ $article->title }}
                </td>
                <td class="px-6 py-4 text-gray-900 dark:text-slate-100" >
                    {{ $article->content }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('articles.show',$article) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline">show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $articles->links() }}
    </div>
</div>
