@foreach ($leerlingen as $leerling)
    <h1>{{$leerling->voornaam}}</h1>{{$leerling->klas['naam']}}
@endforeach