<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostedJob extends Model
{
    protected $table = 'posted_jobs';

    protected $fillable = [
        'created_at',
        'job_title',
        'job_desc',
        'company',
        'company_location',
        'work_location',
        'salary',
    ];
}
