<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Course extends Model
{

	use Searchable;

    public $fillable = ['course_name'];

    /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function searchableAs()
    {
        return 'courses_index';
    }

    
    public function video(){
        return $this->hasMany(Video::class);
    }
}
