<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Studentsubject extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'studentsubjects';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'team_id',
        'adm_no_id',
        'subject_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

  
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class, 'adm_no_id');

    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    
}
