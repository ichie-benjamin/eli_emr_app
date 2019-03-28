<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Appointments extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'appointments';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'm_r_n',
                  'patient_name',
                  'patient_id',
                  'appointment_time',
                  'appointment_date',
                  'time_check_in',
                  'time_check_out',
                  'no_show',
                  'patient_address',
                  'contact_number'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
               'deleted_at'
           ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the patient for this model.
     */
    public function patient()
    {
        return $this->belongsTo('App\User','patient_id');
    }

    /**
     * Set the appointment_date.
     *
     * @param  string  $value
     * @return void
     */


    /**
     * Get appointment_date in array format
     *
     * @param  string  $value
     * @return array
     */

    /**
     * Get deleted_at in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getDeletedAtAttribute($value)
    {
        return \DateTime::createFromFormat('j/n/Y g:i A', $value);

    }

}
