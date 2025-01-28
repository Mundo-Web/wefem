@extends('components.public.matrix', ['pagina' => 'blog'])
@section('titulo', 'Blog')
@section('css_importados')

@stop


@section('content')
    <main class=" pt-36 bg-white">

        <section class="  max-w-7xl mx-auto ">
            <div class="flex flex-col gap-1  text-left" data-aos="fade-down">
                <p class="font-gotham_bold text-colorRojo text-text20 ">blog</p>
                <h2 class="font-gotham_bold text-colorAzul text-text48">Descubre lo mejor:<br />
                    Publicaciones sobre el mundo del internet</h2>
                <p class="text-colorParrafo text-text18">Praesent non euismod arcu, eu dignissim erat. Aliquam erat
                    volutpat..</p>
            </div>
        </section>

        <section class="max-w-7xl mx-auto  pt-10 flex gap-10">
            <div class="w-1/2 flex flex-col justify-center" data-aos="fade-down">
                @if (is_null($lastpost))
                @else
                    <a href="{{ route('detalleBlog', $lastpost->id) }}">
                        <div class="flex flex-col w-full bg-white bg-opacity-10 overflow-hidden rounded-xl text-left">
                            <div class="flex flex-row justify-center">
                                <img class="w-full h-[300px]  object-cover rounded-xl"
                                    src="{{ asset($lastpost->url_image . $lastpost->name_image) }}"
                                    onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                            <div class="py-6 flex flex-col gap-3">
                                <p class="text-text16 font-bold text-colorRojo">Categoria</p>
                                <h2 class=" text-colorAzulOscuro text-text24 line-clamp-3 font-bold">
                                    {{ $lastpost->title }}</h2>
                                <div class=" text-colorParrafo text-18 text-justify line-clamp-3">
                                    {!! $lastpost->extract ?? $lastpost->description !!}</div>
                                <p class="flexjustify-start gap-4 text-colorRojo text-text14 font-medium">
                                    <span>29 de julio de 2023</span>
                                    .
                                    <span>Leido hace 5 min</span>
                                </p>
                            </div>
                        </div>
                    </a>
                @endif
            </div>
            <div class="w-1/2" data-aos="fade-down">

                @foreach ($postsgeneral->take(2) as $postr)
                    <div class=" w-full">
                        <a href="{{ route('detalleBlog', $postr->id) }}" class="flex gap-4">
                            <div class="w-2/5">
                                <img class="h-full w-full object-cover rounded-xl"
                                    src="{{ asset($postr->url_image . $postr->name_image) }}"
                                    onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                            </div>
                            <div class="flex flex-col gap-3 justify-center items-start w-3/5 p-3 cursor-pointer">
                                <p class="text-text16 font-bold text-colorRojo">Categoria</p>
                                <div class="flex flex-col justify-center items-start h-20">
                                    <h2 class=" text-colorAzulOscuro text-text24 line-clamp-3 font-bold">
                                        {{ $postr->title }}
                                    </h2>
                                </div>
                                <div class=" text-colorParrafo text-18 text-justify line-clamp-3">
                                    {!! $lastpost->extract ?? $lastpost->description !!}</div>
                                <p class="flexjustify-start gap-4 text-colorRojo text-text14 font-medium">
                                    <span>29 de julio de 2023</span>
                                    .
                                    <span>Leido hace 5 min</span>
                                </p>
                            </div>

                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="max-w-7xl mx-auto my-20 ">
            <div class="flex flex-col">

                <div class="flex flex-col w-full ">



                    <h2 class=" text-colorAzulOscuro text-text48 font-semibold" data-aos="fade-down">Últimas
                        publicaciones</h2>

                    <p class="text-colorParrafo text-text18 mt-5 mb-10">Nam tempor diam quis urna maximus, ac laoreet arcu
                        convallis.
                        Aenean
                        dignissim nec sem quis
                        consequat.</p>
                </div>

                <div class="w-full">
                    <div class="grid grid-cols-3 gap-10">

                        @foreach ($posts as $post)
                            <div data-aos="fade-down" class="flex flex-col w-full">
                                <a href="{{ route('detalleBlog', $post->id) }}">
                                    <div class="flex flex-row justify-center">
                                        <img class="w-full h-[300px] object-cover rounded-xl"
                                            src="{{ asset($post->url_image . $post->name_image) }}"
                                            onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                    </div>
                                    <div class=" flex flex-col gap-3 mt-4">

                                        <div class="flex flex-col justify-center items-start">
                                            <p class="text-text16 font-bold text-colorRojo">Categoria</p>
                                            <h2 class=" text-colorAzulOscuro text-text24 line-clamp-3 font-bold">
                                                {{ $post->title }}
                                            </h2>
                                        </div>
                                        <div class=" text-colorParrafo text-18 text-justify line-clamp-3">
                                            {!! $post->extract ?? $post->description !!}</div>
                                        <p class="flexjustify-start gap-4 text-colorRojo text-text14 font-medium">
                                            <span>29 de julio de 2023</span>
                                            .
                                            <span>Leido hace 5 min</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </section>
    </main>


@section('scripts_importados')


@stop

@stop
