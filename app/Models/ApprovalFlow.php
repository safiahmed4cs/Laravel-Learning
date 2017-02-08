<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApprovalFlow extends Model
{

	protected $fillable = ['name'];

	public function module()
	{
		return $this->belongsTo(Module::class);
	}

    public function approvalSteps()
    {
    	return $this->hasMany(ApprovalStep::class);
    }

}
