<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * @SWG\Definition(
 *  definition="Job",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="title",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="building_id",
 *      type="integer"
 *  )
 * )
 */
class Job extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function members()
    {
        return $this->hasManyThrough(Job::class, Member::class, 'member_id', 'job_id', 'id', 'id');
    }
    public function building()
    {
        return $this->belongsTo(Building::class, 'building_id', 'id');
    }


    protected $table = 'jobs';
    protected $fillable = [
        'title',
        'description',
        'building_id',
    ];
}
