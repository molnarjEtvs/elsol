@extends('layouts.master')
@section('title',"Első")

@section('content')
<h1>Helló Első</h1>
Kocsi típusa: {{ $kocsi['tipus'] }}<br>
Gyümölcs: {{$gyumolcs['ara']}}
@endsection