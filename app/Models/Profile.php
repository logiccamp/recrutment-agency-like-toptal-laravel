<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Pinterest()
    {
        return $this->hasOne(JobCategory::class, 'id', 'primary_id');
    }
    public function Sinterest()
    {
        return $this->hasOne(JobCategory::class, 'id', 'secondary_id');
    }
}
