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
         'speciality',
         'claimant_firstname',
        'claimant_lastname',
         'claimant_phone', 
         'claimant_email',
         'ecue',
         'ecue_sub', 
         'description', 
         'status',
         'feedback',
         'exam_type', 
         'fiche_inscription',
         'payment_proof',
          'result', 
          'ac_level',
          'mat',
          'ac_year',
    ];

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
