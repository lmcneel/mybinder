@section('title') Student @stop

@section('sidebar')
    <div class="calendar">
        <div class="header">
            <h3>{{ $today->format('F') }}</h3>
        </div>
        <div class="row">
            <div class="col">Sun</div>
            <div class="col">Mon</div>
            <div class="col">Tues</div>
            <div class="col">Wed</div>
            <div class="col">Thurs</div>
            <div class="col">Fri</div>
            <div class="col">Sat</div>
        </div>
        <?php
            $monthStartDay = $today->startOfMonth()->dayOfWeek;
            $monthEndDay = $today->endOfMonth()->dayOfWeek;
            $monthEnd = $today->endOfMonth();
            
            $counter = 1;
        ?>
        @while($counter <= $monthEnd->day)
            <div class="row">
                @for($i = 0; $i < 7; $i++)
                    <div class="col box {{ $today->now()->day == $counter ? 'active' : '' }}">
                        @if($counter == 1)
                            @if($i == $monthStartDay)
                                {{ $counter }}
                                <?php $counter++; ?>
                            @endif
                        @elseif($counter <= $monthEnd->day)
                            {{ $counter }}
                            <?php $counter++ ?>
                        @else
                            &nbsp;
                        @endif
                    </div>
                @endfor
            </div>
        @endwhile
    </div>
    <h3 class="text-center"><span class="fa fa-graduation-cap"></span>My Classes</h3>
    @if(count($classes))
        <ul class="list-group">
            @foreach($classes as $class)
                <li class="list-group-item">{{ $class->name() }}</li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-danger"><p>No active classes. Is it summer?</p> </div>
            <button class="btn btn-primary btn-block"><span class="fa fa-plus-circle"></span>Add Class</button>
       
    @endif
    <h3 class="text-center"><span class="fa fa-futbol-o"></span>Extracurricular Activities</h3>
    @if(count($activities))
        <ul class="list-group">
            @foreach($activities as $activity)
                <li class="list-group-item">{{ $activity->name() }}</li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-danger"><p>No active activities. On vacation?</p></div>
        <button class="btn btn-primary btn-block"><span class="fa fa-plus-circle"></span>Add Activity</button>
        
    @endif
@stop

@section('content')


@stop