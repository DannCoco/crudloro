@extends('admin.layouts.app')
@section('components')
<div class="row col-md-12">
    <div class="col">
        <h5 class="one">Áreas</h5>
    </div>
</div>
@endsection
@section('content')
<div class="col-md-12">
    <div class="dt-responsive table-responsive">
        <table id="table-area" class="table table-striped table-bordered nowrap" style="width: 100%">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('js/area/areaslist.js') }}"></script>
@endpush