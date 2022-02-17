<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'students';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'music',
        'arabic',
        'german',
        'french',
        'biology',
        'team_id',
        'english',
        'physics',
        'class_id',
        'aviation',
        'stream_id',
        'geography',
        'chemestry',
        'kiswahili',
        'last_name',
        'updated_at',
        'created_at',
        'first_name',
        'deleted_at',
        'agriculture',
        'mathematics',
        'home_science',
        'art_and_design',
        'guardians_name',
        'guardians_email',
        'computer_science',
        'business_studies',
        'admission_number',
        'guardians_phone_no',
        'religious_education',
        'history_and_government',
    ];

    function class()
    {
        return $this->belongsTo(Darasa::class, 'class_id');
    }

    public function stream()
    {
        return $this->belongsTo(Stream::class, 'stream_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
