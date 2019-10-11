@extends('layouts.app')


@section('content')

    <section>

        <ul>
            <li>
                <div>Name</div>
                <div>Description</div>
                <div>Sub from</div>
            </li>
            @forelse($categories as $category)
                <li>
                    <div>
                        <a href="{{ route('admin.categories.edit', $category) }}">{{$category->name}}</a>
                    </div>
                    <div>{{ $category->desc }}</div>
                    <div>{{ optional($category->parent)->name ?? '-' }}</div>
                </li>

            @empty

            @endforelse
        </ul>

        <div>
            {{ $categories->links() }}
        </div>
    </section>

@endsection