@extends('layouts.admin')

@section('content')
    <div class="container py-4">

        {{-- @php
    dd($posts)
@endphp --}}

        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->content }}</td>
                        <td><img width="50px" src="{{ $post->image }}" alt="{{ $post->slug }}"></td>
                        <td>{{ date('d-m-Y', strtotime($post->date)) }}</td>
                        <td>Azioni QUI</td>
                    </tr>

                @empty

                    <tr>
                        <td scope="row">No post to show</td>
                    </tr>
                @endforelse



            </tbody>
        </table>


    </div>
@endsection
