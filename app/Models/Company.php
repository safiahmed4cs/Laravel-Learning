<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    
    public function workflows()
    {
    	return $this->hasMany(Workflows::class);
    }
}
