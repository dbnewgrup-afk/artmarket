@extends('layouts.panel', ['title' => 'Admin Artworks', 'panelTitle' => 'Admin Panel'])
@section('sidebar')<ul><li>Artworks</li></ul>@endsection
@section('panel-content')
<h1>Admin Artworks</h1>
<x-empty-state title="Artworks module" description="Operational artworks workflow is ready for extension." />
@endsection
