@extends('restrict.layout')

@section('content')
@livewireStyles

{{$slot}}

@livewireScripts
@endSection