<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'results';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'mean',
        'rank',
        'grade',
        'exam_id',
        'team_id',
        'class_id',
        'student_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id');
    }

    function class()
    {
        return $this->belongsTo(Darasa::class, 'class_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
