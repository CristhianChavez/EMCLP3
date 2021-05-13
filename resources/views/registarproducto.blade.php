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
                                    <input id="producto" type="text"
                                           class="form-control @error('producto') is-invalid @enderror" name="producto"
                                           value="{{ old('producto') }}" required autocomplete="producto">

                                    @error('producto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="sequimiento"
                                       class="col-md-4 col-form-label text-md-right">{{ __('N° sequimiento') }}</label>

                                <div class="col-md-6">
                                    <input id="sequimiento" type="text"
                                           class="form-control @error('sequimiento') is-invalid @enderror" name="sequimiento"
                                           value="{{ old('sequimiento') }}" required autocomplete="sequimiento">

                                    @error('sequimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button id="register-button" type="submit" class="btn btn-primary">
                                        {{ __('Registrar Producto') }}
                                    </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
