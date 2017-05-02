
		@if(!auth()->check())

			<p>Please <a href="/login"> sign-in </a>to watch the lession</p>

		@elseif(!auth()->user()->isActive())

			<p>
				
				Please <a href="/home"> subscribe </a> to view this lession.
			</p>


		@else

			

			<div class="row">

				@foreach ($data as $b) {
	                @foreach($b as $key=>$v) {


	                   <h1>{{$v['title'] }}</h1> <br>
	                   
	                   
	                   <video  id="my-video" class="video-js vjs-big-play-centered" controls poster="http:// vjs.zencdn.net/v/oceans.png" data-setup="{}">
					
			            <source src="{{$v['embed_code'] }}" type="video/mp4">
			           
			            <p class="vjs-no-js">
			                To view this video please enable JavaScript, and consider upgrading
			                to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
			            </p>
			           </video>
			           <br>
	                @endforeach
               @endforeach

			</div> 

	
		@endif