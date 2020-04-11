@extends('layouts.admin')


@section('content')

    <div class="container mt-2">
        @if ($errors->any())
            <div class="alert alert-danger flex">
                <button type="button" class="close mx-2" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <livewire:create-collection-form></livewire:create-collection-form>
    </div>

@endsection
