
@extends('layouts.main')


@section('content')

<h2 class="text-danger text-center">ciao Home</h2>

        <ul>
            @foreach ($trains as $train)

            <li>{{ $train->company}}</li>

            @endforeach




        </ul>

@endsection
