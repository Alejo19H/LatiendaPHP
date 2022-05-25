@extends ('layouts.principal')

@section('contenido')
    <div class="row">
        <h1 class="grey-text  text-darken-4"> Nuevo Producto </h1>

    </div>

    <div class="row">
        <form method="post" action="{{ url('productos') }}" class="col s12" enctype="multipart/form-data">
            @csrf
            @if(session('mensaje'))
            <div class="row">
                <div class="col s8">
                    <span class="validate red-text text-lighten-1">
                        {{ session('mensaje') }}
                    </span>
                </div>
            @endif
            <div class="row">
                <div class="input-field col s8">
                    <input id="nombre" type="text" class="validate" name="nombre">
                    <label for="nombre">Nombre de Producto</label>
                    <span class="validate red-text text-lighten-1">{{ $errors->first('nombre') }}</span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                    <textarea class="materialize-textarea" id="desc" name="desc"></textarea>
                    <label for="desc">Descripcion</label>
                    <span class="validate red-text text-lighten-1">{{ $errors->first('desc') }}</span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                    <input id="precio" type="text" class="validate" name="precio">
                    <label for="precio">Precio</label>
                    <span class="validate red-text text-lighten-1">{{ $errors->first('precio') }}</span>
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field col">
                    <div class="btn">
                        <span>Imagen Producto...</span>
                        <input type="file" name="imagen">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                    <span class="validate red-text text-lighten-1">{{ $errors->first('imagen') }}</span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                    <select name="marca">
                        <option value="" disabled selected>Elija Marca</option>
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                        @endforeach
                    </select>
                    <label>Marcas Disponibles</label>
                    <span class="validate red-text text-lighten-1">{{ $errors->first('marca') }}</span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                    <select name="categoria">
                        <option value="" disabled selected>Elija Categoria</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                    <label>Categorias Disponibles</label>
                    <span class="validate red-text text-lighten-1">{{ $errors->first('categoria') }}</span>
                </div>
            </div>
            <div class="row">
                <button class="btn waves-effect waves-light" type="submit">Guardar</button>
            </div>
        </form>
    </div>
@endsection('contenido')
