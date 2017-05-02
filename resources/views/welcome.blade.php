@extends('layouts.app')

@section('content')

<div class="container">
     <div class="row">
        @foreach($SeleniumCourses as $selenium)
       
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="{{$selenium->image}}" alt="...">
              <div class="caption">
                <h3>{{$selenium->video_catagory}}</h3>
                <p>...</p>

                <p><a href="/videos/{{$selenium->id}}" class="btn btn-default btn-lg btn-block" role="button">Watch Now</a> </p>
              </div>
            </div>
          
        </div>
        @endforeach
    </div>

    <br>

    <div class="row">
        @foreach($UFTCourses as $uft)
       
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="{{$uft->image}}" alt="...">
              <div class="caption">
                <h3>{{$uft->video_catagory}}</h3>
               
                <p>...</p>
                <p><a href="/videos/{{$uft->id}}" class="btn btn-default btn-lg btn-block" role="button">Watch Now</a> </p>
              </div>
            </div>
          
        </div>
        @endforeach
    </div>



</div>
@endsection