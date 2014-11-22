@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-lg-12">

            <h1>{{ $event->title }}</h1>
                <h3>Vom: {{ $event->from }} Bis zum: {{ $event->until }}</h3>
                <p>{{ $event->description }}</p>
        </div>
    </div>
    <div class="row">
     <div class="col-lg-6">
            <h2>Classic</h2>

            <table class="table rankings">
                    @foreach ($classic as $statistic)
                        <tr>
                            <td class="player-image">{{ HTML::Image($statistic->player_image_path, null, array('class' => 'img-responsive')) }}</td>
                            <td>{{ $statistic->player_name }}</td>
                            <td>
                                {{ $statistic->score }}
                                <span class="label">Score</span>
                            </td>
                            <td>
                                {{ $statistic->shots }}
                                <span class="label">Shots</span>
                            </td>
                            <td>
                                {{ $statistic->misses }}
                                <span class="label">Misses</span>
                            </td>
                            <td>
                                <?php echo  round(($statistic->shots - $statistic->misses) / $statistic->shots, 2) * 100 . ' %'; ?>
                                <span class="label">Accuracy</span>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>

     <div class="col-lg-6">
                    <h2>Sharpshooter</h2>
                    <table class="table rankings">
                    @foreach ($sharpshooter as $statistic)
                        <tr>
                            <td class="player-image">{{ HTML::Image($statistic->player_image_path, null, array('class' => 'img-responsive')) }}</td>
                            <td>{{ $statistic->player_name }}</td>
                            <td>
                                {{ $statistic->score }}
                                <span class="label">Score</span>
                            </td>
                            <td>
                                {{ $statistic->shots }}
                                <span class="label">Shots</span>
                            </td>
                            <td>
                                {{ $statistic->misses }}
                                <span class="label">Misses</span>
                            </td>
                            <td>
                                <?php echo  round(($statistic->shots - $statistic->misses) / $statistic->shots, 2) * 100 . ' %'; ?>
                                <span class="label">Accuracy</span>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>

    </div>
</div>
@stop