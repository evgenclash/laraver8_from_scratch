<x-layout>

    <h1 class="text-2xl font-bold mt-5 mb-5">{{ $posts[0]->author->name }}</h1>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">There is no post just yet!</p>
        @endif

    {{--            <article class="mt-5">--}}
    {{--                <p class ="mb-6 font-sans md:font-bold ">--}}
    {{--                    By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a>--}}
    {{--                    <a href="/categories/{{$post->category->slug}}">in {{ $post->category->name }}</a>--}}
    {{--                </p>--}}
    {{--                <p class ="mb-6 font-sans md:font-bold ">{{ $post->title }}</p>--}}
    {{--                <div class="border-b-2">{!! $post->body !!}</div>--}}
    {{--            </article>--}}


        <div class="underline">
            <a href="/"> Go Back!</a>
        </div>
    </main>

</x-layout>
