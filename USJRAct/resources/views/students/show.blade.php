@extends('layouts.app')

@section('content')
    <h1>{{ $student->studfirstname }} {{ $student->studlastname }}</h1>
    <p>College: {{ $student->college->collfullname }}</p>
    <p>Program: {{ $student->program->progfullname }}</p>
    <p>Year: {{ $student->studyear }}</p>
    <a href="{{ url('/show/students/all') }}">Back to list</a>
@endsection
