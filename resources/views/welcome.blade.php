@extends('layouts.app')

@section('content')

<div class="container">
   
     <div class="panel-body">
        <form method="GET" action="{{ route('items-lists') }}">

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="titlesearch" class="form-control" placeholder="Enter Title For Search" value="{{ old('titlesearch') }}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <button class="btn btn-success">Search</button>
            </div>
          </div>
        </div>
      </form>
      </div>


     <div class="row">

     @if($items->count())
        @foreach($items as $selenium)
       
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

      @else
            <h5> No course is available</h5>
      @endif
    </div>


</div>
@endsection