@extends("layouts.app")

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registrar Producto') }}</div>

                    <div class="card-body">
                        <form action="/registar-producto" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="ta1"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Producto') }}</label>

                                <div class="col-md-6">
                                    @foreach($resultado as $producto)
                                        {{$producto["producto"]}}
                                    @endforeach
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="sequimiento"
                                       class="col-md-4 col-form-label text-md-right">{{ __('N° sequimiento') }}</label>

                                <div class="col-md-6">
                                    @foreach($resultado as $producto)
                                        {{$producto["sequimiento"]}}
                                    @endforeach
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
