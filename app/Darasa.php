<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Darasa extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'darasas';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'team_id',
        'class_name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function streams()
    {
        return $this->belongsToMany(Stream::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
