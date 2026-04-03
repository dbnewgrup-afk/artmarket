@extends('layouts.app')

@section('content')
    <div id="app" data-shell='@json($appShell ?? [])'></div>
@endsection
