<x-app-layout>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6">
            @foreach ($posts as $key => $post)
                <article
                    class="w-full h-80 bg-cover bg-center rounded-lg @if ($key === 0) md:col-span-2 @endif"
                    style="background-image: url(@if ($post->image) '{{ Storage::url($post->image->url) }}' @else https://cdn.pixabay.com/photo/2024/06/23/06/27/lake-8847415_1280.jpg @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">

                        <div>
                            @foreach ($post->tags as $tag)
                                @php
                                    $colores = ['red', 'green', 'blue', 'purple', 'orange'];
                                    $color2 = $colores[array_rand($colores)];
                                    $color = $tag->color;
                                    $bgClass = "bg-$color-600";
                                @endphp
                                <a href="{{ route('posts.tag', $tag) }}"
                                    class="inline-block px-3 h-6 text-white rounded-full bg-purple-600">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->name }}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
