<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class NurseNote extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nurse_notes';

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
                  'firstname',
                  'parent_lives',
                  'change_in_medication',
                  'allergies',
                  'vital_signs',
                  'respiratory',
                  'skin_assessment',
                  'cardiovascular_car_assessment',
                  'musculoskeletal_assessment',
                  'digestive_assessment',
                  'pain_assessment',
                  'pain_assessment_scale',
                  'intervention',
                  'goal',
                  'supervisor_assessment'
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
     * Set the vital_signs.
     *
     * @param  string  $value
     * @return void
     */
    public function setVitalSignsAttribute($value)
    {
        $this->attributes['vital_signs'] = json_encode($value);
    }

    /**
     * Set the respiratory.
     *
     * @param  string  $value
     * @return void
     */
    public function setRespiratoryAttribute($value)
    {
        $this->attributes['respiratory'] = json_encode($value);
    }

    /**
     * Set the pain_assessment_scale.
     *
     * @param  string  $value
     * @return void
     */
    public function setPainAssessmentScaleAttribute($value)
    {
        $this->attributes['pain_assessment_scale'] = json_encode($value);
    }

    /**
     * Get vital_signs in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getVitalSignsAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    /**
     * Get respiratory in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getRespiratoryAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    /**
     * Get pain_assessment_scale in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getPainAssessmentScaleAttribute($value)
    {
        return json_decode($value) ?: [];
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
