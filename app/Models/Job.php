<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table= 'jobs';

     protected $fillable = [
        'name_perusaan',
        'name_jobs',
        'location',
        'type_jobs',
        'description',
        'jobs_desc',
        'criteria',
        'email',
        'link',
        'photo',
    ];
}
