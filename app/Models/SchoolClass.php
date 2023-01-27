<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory, BelongsToTenant, SoftDeletes;

    protected $guarded = [];

    public function teacher()
    {
        return $this->belongsTo(User::class);
    }
}
