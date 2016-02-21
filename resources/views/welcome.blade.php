
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-4">
            <div class="tagline">
                <p class="lead">
                    Simplifying life<br />for<br />
                    <span class="shadow">teachers, students and parents</span>
                </p>
            </div>
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-8 col-sm-push-4">
                            <h1>My Binder</h1>
                            <p>How many times have you heard your student say, "I forgot we had a test today" or how many times in school did you forget about a test or an important assigment?</p>
                            <p>How many times as a parent have you had interesting scheduling to make that orchestra concert because you only heard about it two days before hand? Or an extracirricular activity was canceled and you were scrambling for transportation arrangements?</p>
                            <p><strong>MyBinder</strong> aims to assist with all of those problems by having schedules shared between teachers, parents and students with friendly reminders ahead of time.</p>
                            <p>Check out the demos to see how it works</p>
                            <div class="btn-group" role="group" aria-label="Demo Button Links">
                                <a class="btn btn-primary" href="{{ url('/student') }}">Student Demo</a>
                                <a class='btn btn-primary' href="{{ url('/teacher') }}">Teacher Demo</a>
                                <a class="btn btn-primary" href="{{ url('/parent') }}">Parent Demo</a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-pull-8">
                            <p>
                                <img class="img-rounded img-responsive pull-left" src="{{ asset('img/home-copy-alarm.jpg') }}" alt="Woman on an alarm clock setting the time" />
                            </p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
