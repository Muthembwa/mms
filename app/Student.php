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
        
        'first_name',
        'last_name',
        'class_id',
        'stream_id',
        'admission_number',
        'guardians_name',
        'guardians_phone_no', 
        'guardians_email',       
        'updated_at',
        'created_at',
        'deleted_at'
       
        
    
    ];

    function class()
    {
        return $this->belongsTo(Darasa::class,'class_id');
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
