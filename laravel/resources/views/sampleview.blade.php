@extends('layouts.app')


@section('content')

<h1>sampleview</h1>

@if (count($people))

    @foreach ($people as $person)

        <li>{{$person}}</li>

    @endforeach

@endif


@endsection

@section ('footer')

{{--<script>alert('hello peeps')</script>--}}

@endsection
