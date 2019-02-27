<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class DischargeSummary extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'discharge_summaries';

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
                  'patient_id',
                  'surname',
                  'forname',
                  'date_of_birth',
                  'NHS',
                  'address',
                  'phone',
                  'discharging_consultant',
                  'discharging_specialty',
                  'method_of_admission',
                  'date_of_discharge',
                  'GP_details',
                  'diagnosis_at_discharge',
                  'operation_and_procedures',
                  'reasons_for_admission_and_presenting_complaint',
                  'clinical_narrative',
                  'relevant_investigation_and_result',
                  'discharge_destination',
                  'relevant_legal_information',
                  'information_given_to_patient',
                  'GP_actions',
                  'strategies_for_potential_problems',
                  'medication_stopped',
                  'discharging_doctor_name',
                  'bleep_no'
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
     * Set the date_of_birth.
     *
     * @param  string  $value
     * @return void
     */
//    public function setDateOfBirthAttribute($value)
//    {
//        $this->attributes['date_of_birth'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
//    }

    /**
     * Set the date_of_discharge.
     *
     * @param  string  $value
     * @return void
     */
    public function setDateOfDischargeAttribute($value)
    {
        $this->attributes['date_of_discharge'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
    }

    /**
     * Get date_of_birth in array format
     *
     * @param  string  $value
     * @return array
     */
//    public function getDateOfBirthAttribute($value)
//    {
//        return \DateTime::createFromFormat('j/n/Y', $value);
//
//    }

    /**
     * Get date_of_discharge in array format
     *
     * @param  string  $value
     * @return array
     */
//    public function getDateOfDischargeAttribute($value)
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
//    public function getDeletedAtAttribute($value)
//    {
//        return \DateTime::createFromFormat('j/n/Y g:i A', $value);
//
//    }

}
