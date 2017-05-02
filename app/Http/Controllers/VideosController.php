<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use \Auth as Auth;


class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $public_columns = array('id','type', 'access', 'title','details', 'description', 'featured', 'duration', 'views', 'image', 'created_at', 'updated_at');
    private $private_columns = array('id','type', 'access', 'title','details', 'description', 'featured', 'duration', 'views', 'image', 'embed_code','created_at', 'updated_at');

    public function index()
    {
      
        $videos=Video::all();
        return $videos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         

         //$video=Video::findOrFail($id);
          $videos=Video::where('course_id','=',$id)->get();

          foreach ($videos as $video) {

                if($video->access== 'subscribers' && (auth()->check() && auth()->user()->isActive())){
                    
                    $columns = $this->private_columns;
                
                 } else if($video->type== 'free'){
                    $columns = $this->private_columns;

                 } else{
                    $columns = $this->public_columns;
                 }
               
            
                   $products= Video::where('id', '=', $video->id)->get($columns)->toArray();
                   $data[] = $products;
                  // $data['result'] = $products;

                  
          }

          
            
            //return view('videos.show')->with('data',$data);
            return \View::make('videos.show')->with('data',$data); 
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
