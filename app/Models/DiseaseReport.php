<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class DiseaseReport extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'disease_reports';

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
                  'name_of_disease',
                  'date',
                  'country',
                  'patients_id',
                  'patient_first_name',
                  'patient_last_name',
                  'date_of_birth',
                  'gender',
                  'ethic_origin',
                  'area_code',
                  'phone',
                  'time',
                  'address',
                  'city',
                  'state',
                  'zip_code',
                  'was_hospitalized',
                  'did_patients_die',
                  'is_patient_pregnant',
                  'patient_associated_with',
                  'exposure_occurance_district',
                  'country_of_exposure',
                  'show_symbol',
                  'sympton_date',
                  'is_sexually_transmitted',
                  'name_of_facility',
                  'findings_summary',
                  'first_name_of_principal_investigator',
                  'last_name_of_principal_investigator',
                  'area_code_of_investigator',
                  'phone_of_investigator'
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
        return $this->belongsTo('App\User','patients_id');
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
     * Set the patient_associated_with.
     *
     * @param  string  $value
     * @return void
     */
    public function setPatientAssociatedWithAttribute($value)
    {
        $this->attributes['patient_associated_with'] = json_encode($value);
    }

    /**
     * Set the exposure_occurance_district.
     *
     * @param  string  $value
     * @return void
     */
    public function setExposureOccuranceDistrictAttribute($value)
    {
        $this->attributes['exposure_occurance_district'] = json_encode($value);
    }

    /**
     * Set the country_of_exposure.
     *
     * @param  string  $value
     * @return void
     */
    public function setCountryOfExposureAttribute($value)
    {
        $this->attributes['country_of_exposure'] = json_encode($value);
    }

    /**
     * Set the sympton_date.
     *
     * @param  string  $value
     * @return void
     */
    public function setSymptonDateAttribute($value)
    {
        $this->attributes['sympton_date'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
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
     * Get patient_associated_with in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getPatientAssociatedWithAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    /**
     * Get exposure_occurance_district in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getExposureOccuranceDistrictAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    /**
     * Get country_of_exposure in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getCountryOfExposureAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    /**
     * Get sympton_date in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getSymptonDateAttribute($value)
    {
        return \DateTime::createFromFormat('j/n/Y', $value);

    }

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
