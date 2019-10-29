@extends('layouts.shop')

@section('content')
    <h1 class="text-center">@lang('general.' . $page->slug)</h1>
    <section>
        <p>
            {!! nl2br($page->body) !!}
        </p>
    </section>
@endsection
