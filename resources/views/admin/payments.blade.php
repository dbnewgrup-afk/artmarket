@extends('layouts.panel', ['title' => 'Admin Payments', 'panelTitle' => 'Admin Panel'])
@section('sidebar')<ul><li>Payments</li></ul>@endsection
@section('panel-content')
<h1>Admin Payments</h1>
<x-empty-state title="Payments module" description="Operational payments workflow is ready for extension." />
@endsection
