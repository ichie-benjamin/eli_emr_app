<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class TreatmentRecord extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'treatment_records';

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
                  'date',
                  'scheduled',
                  'clinician',
                  'reason_for_visit',
                  'observed_symptoms',
                  'adherence',
                  'height',
                  'weight',
                  'LMB',
                  'TB_status',
                  'aids_associated_conditions',
                  'functional_status',
                  'WHO_stage',
                  'CD_count',
                  'ALT',
                  'HB',
                  'creatinine',
                  'CTX_dose',
                  'ART_Regimen',
                  'date_of_next_visit',
                  'comments'
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
        return $this->belongsTo('App\Models\HivPatient','hiv_patient_id');
    }

    /**
     * Set the date_of_next_visit.
     *
     * @param  string  $value
     * @return void
     */
    public function setDateOfNextVisitAttribute($value)
    {
        $this->attributes['date_of_next_visit'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
    }

    /**
     * Get date_of_next_visit in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getDateOfNextVisitAttribute($value)
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
