@extends('layouts.master')

@section('content')

<h1>Mensaje</h1>
<p>{{ $mensaje->text }}</p>
<small>Enviado por {{ $mensaje->sender->name }}</small>

@endsection()