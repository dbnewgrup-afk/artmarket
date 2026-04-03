@extends('layouts.panel', ['title' => 'Admin Orders', 'panelTitle' => 'Admin Panel'])
@section('sidebar')<ul><li>Orders</li></ul>@endsection
@section('panel-content')
<h1>Admin Orders</h1>
<x-empty-state title="Orders module" description="Operational orders workflow is ready for extension." />
@endsection
