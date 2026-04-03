@extends('layouts.panel', ['title' => 'Admin Dashboard', 'panelTitle' => 'Admin Panel'])
@section('sidebar')<ul><li>Dashboard</li><li>Sellers</li><li>Artworks</li><li>Orders</li><li>Payments</li><li>Withdrawals</li><li>CMS</li><li>Logs</li></ul>@endsection
@section('panel-content')
<h1>Admin Dashboard</h1>
<div style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px;">
<x-dashboard-stat-card label="Total GMV" value="Rp 120.000.000" />
<x-dashboard-stat-card label="Pending Review Artwork" value="14" />
<x-dashboard-stat-card label="Pending Withdrawals" value="7" />
</div>
@endsection
