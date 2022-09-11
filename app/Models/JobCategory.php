<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Jobs()
    {
        return $this->hasMany(Job::class, "category_id", "id");
    }
}
