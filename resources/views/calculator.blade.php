@extends('layouts.app')

@section('content')
    <div id="app">
        <calculator></calculator>
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endsection