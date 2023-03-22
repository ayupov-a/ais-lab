<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *  definition="Member",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="name",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="phone",
 *      type="string"
 *  )
 * @SWG\Property(
 *      property="role",
 *      type="string"
 *  )
 * @SWG\Property(
 *      property="job_id",
 *      type="integer"
 *  )
 * )
 */
class Member extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function jobs()
    {
        return $this->hasManyThrough(Member::class, Job::class, 'job_id', 'member_id', 'id', 'id');
    }

    protected $table = 'members';
    protected $fillable = [
        'name',
        'phone',
        'role',
        'job_id',
    ];
}
