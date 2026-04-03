@extends('layouts.panel', ['title' => 'Admin Sellers', 'panelTitle' => 'Admin Panel'])
@section('sidebar')<ul><li>Sellers</li></ul>@endsection
@section('panel-content')
<h1>Admin Sellers</h1>
<x-empty-state title="Sellers module" description="Operational sellers workflow is ready for extension." />
@endsection
