@section('title') Parent @stop

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
{{--    @if(count($classes))
        <ul class="list-group">
            @foreach($classes as $class)
                <li class="list-group-item">{{ $class->name() }}</li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-danger"><p>No active classes. Is it summer?</p> </div>
            <button class="btn btn-primary btn-block"><span class="fa fa-plus-circle"></span>Add Class</button>
       
    @endif --}}
        <ul class="list-group">
            <li class="list-group-item"><h4>English</h4><small>7:20am - 8:05am</small><br /><small>Monday, Tuesday, Wednesday, Thursday, Friday</small></li>
            <li class="list-group-item"><h4>Algebra II</h4><small>8:10am - 8:55am</small><br /><small>Monday, Tuesday, Wednesday, Thursday, Friday</small></li>
            <li class="list-group-item"><h4>Latin II</h4><small>9:00am - 9:45am</small><br /><small>Monday, Tuesday, Wednesday, Thursday, Friday</small></li>
            <li class="list-group-item"><h4>Chemistry AP I</h4><small>9:50am - 10:35am</small><br /><small>Monday, Tuesday, Wednesday, Thursday, Friday</small></li>
            <li class="list-group-item"><h4>Computer Science I</h4><small>10:40am - 11:25am</small><br /><small>Monday, Tuesday, Wednesday, Thursday, Friday</small></li>
            <li class="list-group-item"><h4>World Geography</h4><small>12:15pm - 1:00pm</small><br /><small>Monday, Tuesday, Wednesday, Thursday, Friday</small></li>
        </ul>
    <h3 class="text-center"><span class="fa fa-futbol-o"></span>Extracurricular Activities</h3>
{{--    @if(count($activities))
        <ul class="list-group">
            @foreach($activities as $activity)
                <li class="list-group-item">{{ $activity->name() }}</li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-danger"><p>No active activities. On vacation?</p></div>
        <button class="btn btn-primary btn-block"><span class="fa fa-plus-circle"></span>Add Activity</button>
        
    @endif --}}
        <ul class="list-group">
            <li class="list-group-item"><h4>NHS</h4></li>
            <li class="list-group-item"><h4>Swimming</h4><small>1:30pm - 3:30pm</small><br /><small>Monday, Tuesday, Wednesday, Thursday, Friday</small></li>
        </ul>
@stop

@section('content')
<div class="student-header row">
    <div class="col-xs-12 text-right">
        <p class="lead">{{ $user->email }}<br />{{ $today->toFormattedDateString() }}</p>
    </div>
    <div class="col-xs-12 text-center">
        <h2>English <small>7:20am - 8:05am</small></h2>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
       <ul class="list-group">
            <li class="list-group-item"> <span class="badge">14 comments</span> Due today: Read Act II <i>Shakespeare's Romeo and Juliet</li>
            <li class="list-group-item"><span class="badge">1 list</span>Today Quiz Vocabulary Words </li>
        </ul>
    </div>
</div>
<div class="student-header row">
    <div class="col-xs-12 text-center">
        <h2>Alegbra II <small>8:10am - 8:55am</small></h2>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
       <ul class="list-group">
            <li class="list-group-item"> <span class="badge">1 attachment</span> Homework Due Today: Irrational Numbers</li>
        </ul>
    </div>
</div>
<div class="student-header row">
    <div class="col-xs-12 text-center">
        <h2>Latin II <small>9:00am - 9:45am</small></h2>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
       <ul class="list-group">
            <li class="list-group-item"> <span class="badge">1 list</span> Vocabulary Test</li>
        </ul>
    </div>
</div>
<div class="student-header row">
    <div class="col-xs-12 text-center">
        <h2>Chemistry AP I <small>9:50am - 10:35am</small></h2>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
       <ul class="list-group">
            <li class="list-group-item"> <span class="badge">1 attachment</span> Lab work</li>
        </ul>
    </div>
</div>
<div class="student-header row">
    <div class="col-xs-12 text-center">
        <h2>World Geography <small>12:15pm - 1:00pm</small></h2>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
       <ul class="list-group">
            <li class="list-group-item"> <span class="badge">2 attachment</span> Australia</li>
        </ul>
    </div>
</div>
@stop