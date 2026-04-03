@extends('layouts.panel', ['title' => 'Admin Cms', 'panelTitle' => 'Admin Panel'])
@section('sidebar')<ul><li>Cms</li></ul>@endsection
@section('panel-content')
<h1>Admin Cms</h1>
<x-empty-state title="Cms module" description="Operational cms workflow is ready for extension." />
@endsection
