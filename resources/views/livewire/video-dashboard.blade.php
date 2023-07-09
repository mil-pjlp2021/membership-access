<div>
    <h2 class="font-semibold text-lg ml-4 mt-3 text-slate-900 dark:text-slate-50">
        Video
    </h2>
    {{--  @dd($videos->links())  --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 mt-4">
        @foreach ($videos as $key => $video)
        <div class="mb-12 px-3 lg:mb-2">
            <a target="_blank" href="http://youtube.com/">
                <div class="mb-2 flex justify-center">
                  <span class="text-primary">
                      <img src="{{ $video->thumbnail }}" class="h-auto max-w-full rounded-lg" alt="">
                    {{--  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      class="h-14 w-14">
                      <path
                        d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                    </svg>  --}}
                  </span>
                </div>
                <h5 class="mb-3 font-bold text-primary text-slate-900 dark:text-slate-50">{{ $video->title }}</h5>
                <h6 class="mb-6 font-normal text-slate-700 dark:text-neutral-50">{{ $video->description }}</h6>
                @if (!$loop->last)
                    <div
                    class="absolute right-0 top-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 lg:block"></div>
                @endif
            </a>

        </div>
        @endforeach
    </div>
    {{ $videos->links() }}
</div>
