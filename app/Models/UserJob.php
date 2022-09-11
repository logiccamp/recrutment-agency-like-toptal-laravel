<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Job()
    {
        return $this->hasOne(Job::class, "id", "job_id");
    }

    public function Worker()
    {
        return $this->hasOne(User::class, "id", "user_id");
    }

    public function Transactions()
    {
        return $this->hasMany(Transaction::class, "userjob_id", "id");
    }
}
