<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobMember extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function jobs()
    {
        return $this->hasManyThrough(Member::class, Job::class, 'job_id', 'member_id', 'id', 'id');
    }

    public function members()
    {
        return $this->hasManyThrough(Job::class, Member::class, 'member_id', 'job_id', 'id', 'id');
    }
    protected $table = 'jobs_members';
    protected $fillable = [
        'job_id',
        'member_id',
    ];
}
