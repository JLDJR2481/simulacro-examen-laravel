<x-app-layout>

    <div class="container mt-5" style="display: flex; justify-content: center;">
        <div class=" row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@lang("formulario.list")</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @forelse ($posts as $post)
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="margin-top:10px; text-decoration: underline;">
                                <a href="{{ route('posts.show', $post->id)}}">{{$post->titulo}}</a>
                            </li>
                            @empty
                            <li class="list-group-item">@lang("No data")</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
