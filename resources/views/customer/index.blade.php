@extends('layout')

@section('sidebar')
<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li>{!! link_to_route('customers.addForm', 'Add customer') !!}</li>
    </ul>
</div>
@stop

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Customers</h1>
    <table class="customers-table" cellspacing="0" width="100%"></table>
</div>
@stop