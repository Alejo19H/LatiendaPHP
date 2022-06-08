@extends ('layouts.principal')

@section('contenido')
    <div class="container">
        <div class="row">
            <h1> Catalogo de Productos</h1>
        </div>
        @if(session('mensaje'))
        <div class="row">
            <p>{{ session('mensaje') }}</p>
            <a href="{{ route('cart.index') }}">Ir al carrito</a>
        </div>
        @endif
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col s12 m5">
                    <div class="card">
                        <div class="card-image">
                            <img class="activator" src="{{ asset('img/' . $producto->imagen) }}" width="900px"
                                height="300px">
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i
                                    class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{ $producto->nombre }}<i
                                    class="material-icons right">more_vert</i></span>


                            <p><a href="{{ route ('productos.show' , $producto->id) }}">Ver Detalles</a></p>
                        </div>
                        <div class="card-tabs">
                            <ul class="tabs tabs-fixed-width">
                                <li class="tab"><a href="#test4" class="">Precio</a></li>
                                <li class="tab"><a class="active" href="#test5">Categoria</a></li>
                                <li class="tab"><a href="#test6" class="">Marca</a></li>
                                <li class="indicator" style="left: 93px; right: 93px;"></li>
                            </ul>
                        </div>

                        <div class="card-content grey lighten-4">
                            <div id="test4" style="display: none;" class="">${{ $producto->precio }}</div>
                            <div id="test5" class="active" style="display: block;">{{ $producto->categoria->nombre }}</div>
                            <div id="test6" style="display: none;" class="">{{ $producto->marca->nombre }}</div>
                        </div>

                        <div class="card-reveal" style="display: none; transform: translateY(0%);">
                            <span class="card-title grey-text text-darken-4">{{ $producto->nombre }}<i
                                    class="material-icons right">close</i></span>
                            <p>{{ $producto->desc }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection('contenido')
