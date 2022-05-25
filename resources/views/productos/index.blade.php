@extends ('layouts.principal')

@section('contenido')
    <div class="container">
        <div class="row">
            <h1> Catalogo de Productos</h1>
        </div>
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img class="activator" src="{{ asset('img/' . $producto->imagen) }}" width="500px"
                                height="300px">
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i
                                    class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{ $producto->nombre }}<i
                                    class="material-icons right">more_vert</i></span>


                            <p><a href="#!">Ver Detalles/a></p>
                        </div>
                        <div class="card-tabs">
                            <ul class="tabs tabs-fixed-width">
                                <li class="tab"><a href="#test4" class="">Test 1</a></li>
                                <li class="tab"><a class="active" href="#test5">Test 2</a></li>
                                <li class="tab"><a href="#test6" class="">Test 3</a></li>
                                <li class="indicator" style="left: 93px; right: 93px;"></li>
                            </ul>
                        </div>

                        <div class="card-content grey lighten-4">
                            <div id="test4" style="display: none;" class="">Test 1</div>
                            <div id="test5" class="active" style="display: block;">Test 2</div>
                            <div id="test6" style="display: none;" class="">Test 3</div>
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
