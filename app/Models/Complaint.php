<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Student;


class Complaint extends Model
{
    use HasFactory;
    protected $table = 'complaints';

    protected $fillable = [
        'student_id',
         'complain_type', 
         'mat_number',
         'field',
         'program',
         'tc',
         'jury',
         'seq_number',
         'grade_over_20',
         'coef_grade',
         'validation',
         'claimant_firstname',
        'claimant_lastname',
         'claimant_phone', 
         'claimant_email',
         'ecue',
         'ue',
         'semester', 
         'description', 
         'status',
         'claim_lunch',
         'current_time',
         'hour',
         'end',
         'feedback',
         'exam_type', 
         'fiche_inscription',
         'payment_proof',
          'result', 
          'ac_level',
          'mat',
          'ac_year',
    ];



    // Mutator to set current_time when claim_lunch is set to "lunched"
    public function setClaimLunchAttribute($value)
    {
        $this->attributes['claim_lunch'] = $value;
        if ($value === 'lunched') {
            $this->attributes['current_time'] = $this->freshTimestamp();
        }
    }
    // protected $hidden =[         'fiche_inscritpiton'];

    // public function student()
    // {
    //     return $this->belongsTo(Student::class);
    // }

    
    // public function images()
    // {
    //     return $this->hasMany(Image::class);
    // }

    
    
    public function addImage($path)
    {
        return $this->images()->create(['path' => $path]);
    }

    protected $casts = [
        'fiche_inscription' => 'array',
    ];
    
}
