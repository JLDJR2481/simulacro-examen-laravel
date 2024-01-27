<x-app-layout>
    <style>
        #main {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
            margin-top: 20px;
        }

        .form-group {
            margin-top: 20px;
            text-align: center;
        }

        .form-check {
            text-align: center;
        }

        .h4 {
            font-weight: bolder;
        }

        #submit-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        #submit {
            border: 1px solid black;
            border-radius: 20px;
            padding: 10px;
        }

        #submit:hover {
            transition: ease-out;
            background-color: black;
            color: white;
            border: 1px solid white;
            transition-duration: 0.40s;
        }
    </style>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <div class="container" id="main">
        <form action="{{route('posts.update', $post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo" class="h4">@php
                    echo __("formulario.title")
                    @endphp</label><br>
                <input type="text" name="titulo" class="form-control-lg mb-3" required
                    value="{{ old('titulo', $post->titulo) }}">
                @error('titulo')
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="extracto" class="h4">@lang('formulario.extract')</label><br>
                <textarea rows="3" name="extracto" class="form-control-lg w-100 mb-3"
                    required>{{ old('extracto', $post->extracto) }}</textarea>
                @error('extracto')
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="contenido" class="h4">@lang("formulario.content")</label><br>
                <textarea rows="5" name="contenido" class="form-control-lg w-100 mb-3"
                    required>{{ old('contenido', $post->contenido) }}</textarea>
                @error("contenido")
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div class="container-fluid">
                <div class="container">
                    <div class="form-check">
                        <label for="caducable" class="form-check-label h4">@php
                            echo __("formulario.expiring");
                            @endphp</label>
                        <input type="checkbox" name="caducable[]" id="caducable_true" class="form-check-input"
                            value="{{old('caducable', $post->caducable)}}" {{$post->caducable ? 'checked': ''}}>
                        @error("caducable")
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="container">
                    <div class="form-check">
                        <label for="comentable" class="form-check-label h4">{{__("formulario.commentable")}}</label>
                        <input type="checkbox" name="comentable[]" id="comentable_true" class="form-check-input"
                            value="{{old('comentable', $post->comentable)}}" {{$post->comentable ? 'checked' : ''}}>
                        @error("comentable")
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="acceso" class="form-control"> {{ __('formulario.access') }}</label>
                <select name="acceso" class="form-control">
                    <option value="privado" {{$post->acceso == 'privado' ? 'selected': ''}}>
                        {{__("formulario.private")}}
                    </option>
                    <option value="publico" {{$post->acceso == 'publico' ? 'selected' : ''}}>@php
                        echo __("formulario.public")
                        @endphp</option>
                </select>
                @error('acceso')
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>

            <div class="container-fluid" id="submit-container">
                <button type="submit" id="submit" class="container-fluid">@lang('Update')</button>
            </div>
        </form>
    </div>
</x-app-layout>
