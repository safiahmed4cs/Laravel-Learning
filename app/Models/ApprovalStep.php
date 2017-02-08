<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApprovalStep extends Model
{
    public function approvalFlow()
    {
    	return $this->belongsTo(ApprovalFlow::class);
    }
}
