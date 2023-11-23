
@extends('layouts.main')


@section('content')

<table class="table table-success table-striped text-center">
    <thead>
      <tr>
        <th scope="col" class="bg-danger text-white">Codice treno</th>
        <th scope="col" class="bg-danger text-white">Stazione di partenza</th>
        <th scope="col" class="bg-danger text-white">Stazione di arrivo</th>
        <th scope="col" class="bg-danger text-white">Azienda</th>
        <th scope="col" class="bg-danger text-white">Dettagli</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train )

            <tr>
                <td>{{ $train->train_code}}</td>
                <td>{{ $train->departure_station}}</td>
                <td>{{ $train->arrival_station}}</td>
                <td>{{ $train->company}}</td>
                <td><a href="{{ route('detail', ['id' => $train->id])}}">dettagli</a></td>


            </tr>

        @endforeach


    </tbody>
  </table>



@endsection
