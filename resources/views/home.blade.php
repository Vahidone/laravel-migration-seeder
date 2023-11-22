
@extends('layouts.main')


@section('content')

<table class="table table-success table-striped text-center">
    <thead>
      <tr>
        <th scope="col">Codice treno</th>
        <th scope="col">Stazione di partenza</th>
        <th scope="col">Stazione di arrivo</th>
        <th scope="col">Orario partenza</th>
        <th scope="col">Orario arrivo</th>
        <th scope="col">Azienda</th>
        <th scope="col">Numero carrozza</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train )

            <tr>
                <td><a href="{{ route('detail', ['id' => $train->id])}}">{{ $train->train_code}}</a></td>
                <td>{{ $train->departure_station}}</td>
                <td>{{ $train->arrival_station}}</td>
                <td>{{ $train->departure_time}}</td>
                <td>{{ $train->arrival_time}}</td>
                <td>{{ $train->company}}</td>
                <td>{{ $train->carriage_number}}</td>

            </tr>

        @endforeach


    </tbody>
  </table>



@endsection
