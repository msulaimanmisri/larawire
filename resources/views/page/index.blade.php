@extends('layouts.page')

@section('content')
<div class="container mt-5">
    <div class="row text-center">
        <h1 class="display-1">{{ env('APP_NAME') }}</h1>
    </div>

    {{-- Livewire Start --}}
    <div class="row mt-4">
        @livewire('index-contact')
    </div>
</div>
@endsection