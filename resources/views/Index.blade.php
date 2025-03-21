@extends('layout.main')

@section('bodyClass', 'bg-success')
@section('container')
    <h1>About Me</h1>
    <h3>{{ $nama }}</h3>
    <img src="{{ $img }}" alt="{{ $nama }}" style="width: 200px" class="shadow shadow-lg">
    <h5>{{ $email }}</h5>
    <h5>{{ $telp }}</h5>
@endsection