@extends('layouts.admin')


@section('content')

    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <a class="btn btn-primary mb-4"
                           href="{{ route('admin.collections.create') }}">@lang('general.Create product')</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <livewire:collections-datatable></livewire:collections-datatable>
            </div>
        </div>

    </div>


@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop
