@section('title', 'Home')
@extends('admin.layouts.app')
@section('dashboard')
<div class="background-dashboard">
</div>
@endsection
@push('functions')
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.page-header').hide();
        });
    </script>
@endpush