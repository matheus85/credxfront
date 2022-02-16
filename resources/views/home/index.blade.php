@extends('layout.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
</section>

<input type="hidden" name="green_light" value="{{ asset('images/green-led-md.png') }}">
<input type="hidden" name="red_light" value="{{ asset('images/red-led-md.png') }}">
<div class="row p-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="trackings-live" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('js')
<script src="{{asset('vendor/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendor/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/timer.js')}}"></script>
@endsection