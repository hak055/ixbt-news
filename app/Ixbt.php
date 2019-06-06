<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ixbt extends Model
{
    protected $guarded = [];

	public function saveDb($array)
	{	

		$data = [
               'title' => $array->title,
               'link' => $array->link,
               'description' => e($array->description),
               'author' => $array->author,
               'category' => $array->category,
               'pubDate' => $array->pubDate,
                                                
                    ];         

    Ixbt::updateOrCreate(['title' => $array->title], $data);
                    
                    // Ixbt::Create($data);
                
	}

    
}
