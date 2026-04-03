@extends('layouts.panel', ['title' => 'Pesanan Seller', 'panelTitle' => 'Seller Panel'])
@section('sidebar')<ul><li>Pesanan</li></ul>@endsection
@section('panel-content')
<h1>Pesanan</h1>
<x-empty-state title="Belum ada pesanan" description="Pesanan akan tampil setelah artwork terjual." />
@endsection
