@extends('layouts.app')

@section('content')
    <h1>All Colleges</h1>
    <ul>
        @foreach ($colleges as $college)
            <li>
                {{ $college->collfullname }} ({{ $college->collshortname }})
                <a href="{{ url('/show/college/' . $college->collid) }}">Show</a>
                <ul>
                    @foreach ($college->departments as $department)
                        <li>{{ $department->deptfullname }}</li>
                    @endforeach
                    @foreach ($college->programs as $program)
                        <li>{{ $program->progfullname }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
