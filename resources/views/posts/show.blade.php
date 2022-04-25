<x-app-layout>

    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>
        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            {{--contenido principal post--}}
            <div class="md:col-span-2">
                <figure class="">
                   @if ($post->image)
                   <img class="w-full h-80 object-cover object-center"src="{{Storage::url($post->image->url)}}" alt="" >
                   @else
                   <img class="w-full h-80 object-cover object-center"src="https://cdn.pixabay.com/photo/2017/02/19/15/28/winter-2080070_960_720.jpg"  alt="" >
                   @endif
                </figure>
                <div class=" text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>
            </div>

                    {{--contenido relacionado post--}}
            <aside class="">
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$post->category->name}}</h1>

                <ul class="">
                    @foreach ($similares as $similar )
                        <li class="mb-4">
                            <a href="{{route('posts.show', $similar)}}" class="flex">
                                @if ($similar->image)
                                <img class="w-36 h-20 object-cover object-cente"src="{{Storage::url($similar->image->url)}}" alt="" >
                                @else
                                <img class="w-36 h-20 object-cover object-cente"src="https://cdn.pixabay.com/photo/2017/02/19/15/28/winter-2080070_960_720.jpg"  alt="" >
                                @endif
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>



        </div>

    </div>


</x-app-layout>
