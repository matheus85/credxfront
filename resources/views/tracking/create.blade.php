@extends('layout.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Trackings - Adicionar</h1>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid pl-3 pr-3">
    <div class="card card-primary">
        <form method="POST" action="{{route('trackings.store')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="description">Descrição</label>
                    <input type="text" name="description" class="form-control" id="description" required>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" name="url" class="form-control" id="url" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection