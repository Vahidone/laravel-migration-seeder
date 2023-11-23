
@extends('layouts.main')


@section('content')

<table class="table table-success table-striped text-center">
    <thead>
      <tr>
        <th scope="col">Codice treno</th>
        <th scope="col">Stazione di partenza</th>
        <th scope="col">Stazione di arrivo</th>
        <th scope="col">Azienda</th>
        <th scope="col">Dettagli</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train )

            <tr>
                <td>>{{ $train->train_code}}</td>
                <td>{{ $train->departure_station}}</td>
                <td>{{ $train->arrival_station}}</td>
                <td>{{ $train->company}}</td>
                <td><a href="{{ route('detail', ['id' => $train->id])}}">dettagli</a></td>


            </tr>

        @endforeach


    </tbody>
  </table>



@endsection
