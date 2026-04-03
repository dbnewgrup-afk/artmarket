@extends('layouts.panel', ['title' => 'Profil Toko', 'panelTitle' => 'Seller Panel'])
@section('sidebar')<ul><li>Profil</li></ul>@endsection
@section('panel-content')
<h1>Profil Toko</h1>
<x-form-section title="Informasi Artist">
<form><input placeholder="Shop name" /></form>
</x-form-section>
@endsection
