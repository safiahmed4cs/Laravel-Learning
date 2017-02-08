<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    
	public function approvalflows()
	{
		return $this->hasMany(ApprovalFlow::class);
	}

}
