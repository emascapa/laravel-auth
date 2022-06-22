@extends('layouts.admin')

@section('content')
    <div class="container py-4">


        <div class="card w-75 mx-auto">

            <img src="{{ $post->image }}" alt="{{ $post->slug }}">

            <div class="card-body text-center d-flex flex-column">
                <h2 class="mb-1">{{ $post->title }}</h2>
                <span class="mb-3">Slug: {{ $post->slug }}</span>
                <p class="mb-3">{{ $post->content }}</p>
                <span class="mb-3">Date: {{ date('d-m-Y', strtotime($post->date)) }}</span>

            </div>

        </div>

        {{-- <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->content }}</td>
                        <td><img width="50px" src="{{ $post->image }}" alt="{{ $post->slug }}"></td>
                        <td>{{ $newDate = date('d-m-Y', strtotime($post->date)) }}</td>
                        <td>Azioni QUI</td> --}}




        </tbody>
        </table>


    </div>
@endsection
