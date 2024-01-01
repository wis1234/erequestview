<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DupTranscript extends Model
{
    use HasFactory;
    protected $table = 'dup_transcripts';


    protected $fillable = [
        'ac_year',
        'ac_level',
        'mat',
        'exam_type',
        'field',
        'speciality',
        'description',
        'status',
        'feedback',
        'fiche_inscription',
        'cip',
        'inscription',
        'user_id',      
        'firstname',
        'lastname',
        'email',
        'phone',
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
