@extends('layouts.app')

@section('content')
    <h1>All Students</h1>
    <ul>
        @foreach ($students as $student)
            <li>
                {{ $student->studfirstname }} {{ $student->studlastname }} - {{ $student->college->collshortname }} - {{ $student->program->progshortname }}
                <a href="{{ url('/show/student/' . $student->studid) }}">Show</a>
            </li>
        @endforeach
    </ul>
@endsection
