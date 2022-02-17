<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'schools';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'team_id',
        'level_id',
        'sub_county',
        'created_at',
        'updated_at',
        'deleted_at',
        'school_name',
    ];

    public function level()
    {
        return $this->belongsTo(SchoolLevel::class, 'level_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
