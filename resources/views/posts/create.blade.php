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
    <div class="container" id="main">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="title" class="h4">Título de la publicación</label><br>
                <input type="text" name="title" class="form-control-lg mb-3" required
                    placeholder="Ingresa aquí el título de la publicación">
            </div>
            <div class="form-group">
                <label for="extracto" class="h4">Extracto publicación</label><br>
                <textarea rows="3" name="extracto" class="form-control-lg w-100 mb-3" required
                    placeholder="Ingresa un extracto de la publicación"></textarea>
            </div>
            <div class="form-group">
                <label for="content" class="h4">Contenido publicación</label><br>
                <textarea rows="5" name="content" class="form-control-lg w-100 mb-3" required
                    placeholder="Ingresa el contenido de la publicación"></textarea>
            </div>
            <div class="container-fluid">
                <div class="container">
                    <div class="form-check">
                        <label for="caducable" class="form-check-label h4">¿Caducable?</label>
                        <input type="checkbox" name="caducable" id="caducable_true" class="form-check-input">
                    </div>
                </div>
                <div class="container">
                    <div class="form-check">
                        <label for="comentable" class="form-check-label h4">¿Comentable?</label>
                        <input type="checkbox" name="comentable" id="comentable_true" class="form-check-input">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="acceso" class="form-control"> Acceso:</label>
                <select name="acceso" class="form-control">
                    <option value="privado">Privado</option>
                    <option value="publico">Público</option>
                </select>
            </div>

            <div class="container-fluid" id="submit-container">
                <button type="submit" id="submit" class="container-fluid">Guardar</button>
            </div>
        </form>
    </div>
</x-app-layout>
