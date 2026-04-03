@extends('layouts.panel', ['title' => 'Admin Withdrawals', 'panelTitle' => 'Admin Panel'])
@section('sidebar')<ul><li>Withdrawals</li></ul>@endsection
@section('panel-content')
<h1>Admin Withdrawals</h1>
<x-empty-state title="Withdrawals module" description="Operational withdrawals workflow is ready for extension." />
@endsection
