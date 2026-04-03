@extends('layouts.panel', ['title' => 'Seller Dashboard', 'panelTitle' => 'Seller Panel'])

@section('sidebar')
<ul><li>Dashboard</li><li>Karya Saya</li><li>Pesanan</li><li>Wallet</li><li>Withdrawals</li><li>Profil</li></ul>
@endsection

@section('panel-content')
<h1>Seller Dashboard</h1>
<div style="display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:12px;">
    <x-dashboard-stat-card label="Total Karya Aktif" value="24" />
    <x-dashboard-stat-card label="Pending Review" value="5" />
    <x-dashboard-stat-card label="Total Order" value="18" />
    <x-dashboard-stat-card label="Available Balance" value="Rp 8.500.000" />
</div>
@endsection
