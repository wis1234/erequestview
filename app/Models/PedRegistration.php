<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carbon;

class PedRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'complaint_id',
        'ac_year',
        'ac_level',
        'field',
        'program',
        'semester',
        'fiche_inscription',
        'description',
        'status',
        'user_firstname',
        'user_lastname',
        'user_phone',
        'user_email',
        'mat_number',
        'hour',
        'ped_lunch',
        'current_time',
        'treat_time',
        'feedback',
    ];


     // Mutator to set current_time when ped_lunch is set to "lunched"
     public function setPedLunchAttribute($value)
     {
         $this->attributes['ped_lunch'] = $value;
         if ($value === 'lunched') {
             $this->attributes['current_time'] = $this->freshTimestamp();
         }
     }

          // Mutator to set status when ped_lunch is updated
          public function setStatusAttribute($value)
          {
              $this->attributes['status'] = $value;
              if ($value === 'VALIDE' || $value === 'REJETE') {
                //   $this->attributes['treat_time'] = $this->freshTimestamp();
                $this->attributes['treat_time'] = Carbon::now();

              }
          }



          

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function complaint()
    {
        return $this->belongsTo(Complaint::class);
    }
}
