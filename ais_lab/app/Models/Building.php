<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function jobs()
    {
        return $this->hasMany(Job::class, 'building_id', 'id');
    }

    protected $table = 'buildings';
    protected $fillable = [
        'city',
        'address',
        'type',
    ];
}
