@extends('layouts.master')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1>Events</h1>
        </div>
    </div>


    <div class="row">

<div class="col-lg-6">
    <a href="/events/hessentag-2014">{{ HTML::Image(asset('assets/images/hessentag.png'), null, array('class' => 'img-responsive')) }}</a>
</div>
{{--
<div class="col-lg-6">
    {{ HTML::Image(asset('assets/images/hessentag.png'), null, array('class' => 'img-responsive')) }}
</div>
--}}
{{--
        <div class="col-lg-12">



            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>From</th>
                    <th>Until</th>
                </tr>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->from }}</td>
                    <td>{{ $event->until }}</td>
                </tr>
            @endforeach
            </table>


            @foreach ($events as $event)

            <h1>{{ $event->title }}</h1>
            <h3>From: {{ $event->from }} Until: {{ $event->until }}</h3>
            <p>{{ $event->description }}</p>

                <table class="table">
                    <tr>
                        <th>Shots</th>
                        <th>Misses</th>
                        <th>Score</th>
                        <th>Time</th>
                        <th>Mode</th>
                    </tr>
                @foreach ($event->statistics()->get() as $statistic)
                    <tr>
                        <td>{{ $statistic->shots }}</td>
                        <td>{{ $statistic->misses }}</td>
                        <td>{{ $statistic->score }}</td>
                        <td>{{ $statistic->time }}</td>
                        <td>{{ $statistic->mode_id }}</td>
                    </tr>
                @endforeach
                </table>

            @endforeach


        </div>
        --}}
    </div>
</div>
@stop