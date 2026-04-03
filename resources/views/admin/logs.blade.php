@extends('layouts.panel', ['title' => 'Admin Logs', 'panelTitle' => 'Admin Panel'])
@section('sidebar')<ul><li>Logs</li></ul>@endsection
@section('panel-content')
<h1>Admin Logs</h1>
<x-empty-state title="Logs module" description="Operational logs workflow is ready for extension." />
@endsection
