@extends('layouts.panel', ['title' => 'Withdrawal Seller', 'panelTitle' => 'Seller Panel'])
@section('sidebar')<ul><li>Withdrawals</li></ul>@endsection
@section('panel-content')
<h1>Tarik Dana</h1>
<x-form-section title="Request Withdrawal">
<form><input placeholder="Nominal" /><button>Submit</button></form>
</x-form-section>
@endsection
