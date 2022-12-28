<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['title'];


    public function  category()  {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function region() {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function typejob() {
        return $this->belongsTo(TypeJob::class, 'type_job_id');
    }
}


