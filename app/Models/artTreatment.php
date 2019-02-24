<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class artTreatment extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'art_treatments';

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
                  'hiv_patient_id',
                  'date_started',
                  'initial_regimen',
                  'first_line_first_substitution',
                  'first_line_first_substitute_reason',
                  'first_line_first_substitute_date',
                  'second_line_regimen',
                  'second_line_reason',
                  'second_line_date',
                  'second_line_second_substituted',
                  'second_line_second_substitude_reason',
                  'second_line_second_substitute_date'
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
     * Get the hivPatient for this model.
     */
    public function hivPatient()
    {
        return $this->belongsTo('App\Models\hivPatient','hiv_patient_id');
    }

    /**
     * Set the date_started.
     *
     * @param  string  $value
     * @return void
     */
//    public function setDateStartedAttribute($value)
//    {
//        $this->attributes['date_started'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
//    }

    /**
     * Set the first_line_first_substitute_date.
     *
     * @param  string  $value
     * @return void
     */
//    public function setFirstLineFirstSubstituteDateAttribute($value)
//    {
//        $this->attributes['first_line_first_substitute_date'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
//    }

    /**
     * Set the second_line_date.
     *
     * @param  string  $value
     * @return void
     */
//    public function setSecondLineDateAttribute($value)
//    {
//        $this->attributes['second_line_date'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
//    }

    /**
     * Set the second_line_second_substitute_date.
     *
     * @param  string  $value
     * @return void
     */
//    public function setSecondLineSecondSubstituteDateAttribute($value)
//    {
//        $this->attributes['second_line_second_substitute_date'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
//    }

    /**
     * Get date_started in array format
     *
     * @param  string  $value
     * @return array
     */
//    public function getDateStartedAttribute($value)
//    {
//        return \DateTime::createFromFormat('j/n/Y', $value);
//
//    }

    /**
     * Get first_line_first_substitute_date in array format
     *
     * @param  string  $value
     * @return array
     */
//    public function getFirstLineFirstSubstituteDateAttribute($value)
//    {
//        return \DateTime::createFromFormat('j/n/Y', $value);
//
//    }

    /**
     * Get second_line_date in array format
     *
     * @param  string  $value
     * @return array
     */
//    public function getSecondLineDateAttribute($value)
//    {
//        return \DateTime::createFromFormat('j/n/Y', $value);
//
//    }

    /**
     * Get second_line_second_substitute_date in array format
     *
     * @param  string  $value
     * @return array
     */
//    public function getSecondLineSecondSubstituteDateAttribute($value)
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
