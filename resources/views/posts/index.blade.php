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
                                style="margin-top:10px; text-decoration: underline; display-flex; justify-content: between;border: 1px solid black;">
                                <a href="{{ route('posts.show', $post->id)}}">{{$post->titulo}}</a>
                                <div class='btn-group'>
                                    <a href="{{route('posts.edit', $post->id)}}"
                                        class="btn btn-warning">@lang("Edit")</a>
                                    <form action="{{route('posts.destroy', $post->id)}}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit">@lang("Delete")</button>
                                    </form>
                                </div>
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
