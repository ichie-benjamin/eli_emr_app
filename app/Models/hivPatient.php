<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class hivPatient extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hiv_patients';

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
                  'patient_name',
                  'facility_client_name',
                  'unique_code',
                  'date_of_birth',
                  'sex',
                  'address',
                  'family_members',
                  'contact',
                  'date_confirmed_hiv',
                  'hiv_type'
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
     * Set the date_of_birth.
     *
     * @param  string  $value
     * @return void
     */
    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
    }

    /**
     * Set the date_confirmed_hiv.
     *
     * @param  string  $value
     * @return void
     */
//    public function setDateConfirmedHivAttribute($value)
//    {
//        $this->attributes['date_confirmed_hiv'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
//    }

    /**
     * Get date_of_birth in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getDateOfBirthAttribute($value)
    {
        return \DateTime::createFromFormat('j/n/Y', $value);

    }

    /**
     * Get date_confirmed_hiv in array format
     *
     * @param  string  $value
     * @return array
     */
//    public function getDateConfirmedHivAttribute($value)
//    {
//        return \DateTime::createFromFormat('j/n/Y', $value);
//
//    }

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
