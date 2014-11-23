@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>{{ $statistic->event->title . ' - ' . $statistic->mode->title }}</h1>
              <table class="table rankings">
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
              </table>
          </div>
        </div>

        @include('statistics._form')
    </div>
</div>
@stop