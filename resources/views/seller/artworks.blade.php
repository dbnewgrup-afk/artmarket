@extends('layouts.panel', ['title' => 'Karya Saya', 'panelTitle' => 'Seller Panel'])
@section('sidebar')<ul><li>Karya Saya</li></ul>@endsection
@section('panel-content')
<h1>Karya Saya</h1>
<x-table-wrapper>
<thead><tr><th>Judul</th><th>Kategori</th><th>Harga</th><th>Status</th></tr></thead>
<tbody><tr><td>Sunset Study</td><td>Lukisan</td><td>Rp 2.500.000</td><td><x-status-badge status="pending_review" /></td></tr></tbody>
</x-table-wrapper>
@endsection
