<?php

namespace App\Models;

class Project extends Model
{

    public function scopeIncomplete($query){
    	
    	return $query->where('completed',0);
    	
    }

    public function scopeComplete($query){
    	
    	return $query->where('completed',1);
    	
    }

}
