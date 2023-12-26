<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $table = 'certificates';

    protected $fillable = [
        'user_id',
        'ac_year',
        'ac_level',
        'mat',
        'firstname', 
        'lastname', 
        'email',     
        'phone',     
        'exam_type',
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
        'enrolle3', 
        'dis_cover_page', 
        '
        ', 
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
