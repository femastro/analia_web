@extends('layout.app')

@section('content')
    <div class="col-sm-12">
        <img class="w-100" src="{{ asset('img/imagen.png') }}" alt="">
    </div>
    <div class="col-sm-12 mt-2">
        <div class="card bg-primary">
            <div class="mt-2">
                <h4 class="mx-5" style="color:lightgray">Noticias y Eventos</h4>
            </div>
        </div>
        {{-- publica los post que hay en la BD --}}
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-sm-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                        </div>
                        <img class="img-fluid" src="{{ $post->imagen }}" alt="">
                        <p style="font-size:.75em">{{ $post->created_at }}</p>
                        <div class="card-body">
                            <p class="card-text">{{ $post->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card bg-primary">
            <div class="mt-2">
                <h4 class="mx-5" style="color:lightgray">Ferias</h4>
            </div>
        </div>
        <div class="row">
            {{-- @foreach ($posts as $post)
                <div class="col-sm-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->titulo_news }}</h5>
                        </div>
                        <img class="img-fluid" src="{{ $post->imagen_news }}" alt="">
                        <p style="font-size:.75em">{{ $post->adCreate_news }}</p>
                        <div class="card-body">
                            <p class="card-text">{{ $post->descripcion_news }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($posts as $post)
                <div class="col-sm-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->titulo_news }}</h5>
                        </div>
                        <img class="img-fluid" src="{{ $post->imagen_news }}" alt="">
                        <p style="font-size:.75em">{{ $post->adCreate_news }}</p>
                        <div class="card-body">
                            <p class="card-text">{{ $post->descripcion_news }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($posts as $post)
                <div class="col-sm-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->titulo_news }}</h5>
                        </div>
                        <img class="img-fluid" src="{{ $post->imagen_news }}" alt="">
                        <p style="font-size:.75em">{{ $post->adCreate_news }}</p>
                        <div class="card-body">
                            <p class="card-text">{{ $post->descripcion_news }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($posts as $post)
                <div class="col-sm-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->titulo_news }}</h5>
                        </div>
                        <img class="img-fluid" src="{{ $post->imagen_news }}" alt="">
                        <p style="font-size:.75em">{{ $post->adCreate_news }}</p>
                        <div class="card-body">
                            <p class="card-text">{{ $post->descripcion_news }}</p>
                        </div>
                    </div>
                </div>
            @endforeach --}}
        </div>
    </div>
@endsection
