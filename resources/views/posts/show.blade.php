<x-app-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class='card'>
                    <div class="card-body">
                        <h1 class="card-title">@lang("formulario.title"): {{$post->titulo}}</h1>
                        <p class="card-text">@lang("formulario.extract"): {{$post->extracto}}</p>
                        <p class="card-text">@lang("formulario.content"): {{$post->contenido}}</p>
                        <p class="card-text">@lang("formulario.expiring"): {{$post->caducable ? __('Yes') : __('No')}}
                        </p>
                        <p class="card-text">@lang("formulario.commentable"): {{$post->comentable ? __('Yes') :
                            __('No')}}</p>
                        <p class="card-title">@lang("formulario.access"): {{$post->acceso}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
