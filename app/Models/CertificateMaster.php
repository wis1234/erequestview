<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateMaster extends Model
{
    use HasFactory;

    protected $table = 'certificates_master';

    protected $fillable = [
        'user_id',
        'ac_year',
        'ac_level',
        'mat',
        'firstname', 
        'lastname', 
        'email',     
        'phone',     
        'delay',
        'field',
        'speciality',
        'defense_date',
        'description',
        'status',
        'feedback',
        'birth_cert', 
        'cip', 
        'id_card', 
        'student_card', 
        'enrolle1', 
        'enrolle2', 
        'school_fees1',
        'school_fees2',
        'enrolle_defense', 
        'dis_cover_page', 
        'cert_dis_def',
        'cue_m1',
        'cue_m2',
        
        
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
