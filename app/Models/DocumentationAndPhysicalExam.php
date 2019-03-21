<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentationAndPhysicalExam extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'documentation_and_physical_exams';

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
                  'date_examined',
                  'preceptor_name',
                  'chief_complaint',
                  'history_of_illnes',
                  'past_medical_history',
                  'immunization',
                  'phemonia',
                  't_dap',
                  'zoster',
                  'family_history',
                  'social_history',
                  'h_t',
                  'w_t',
                  'b_m_i',
                  'temp',
                  'pulse',
                  'b_p',
                  'r_r',
                  'pain',
                  'head',
                  'eyes',
                  'ears_nose_throat',
                  'mouth',
                  'neck',
                  'respiratory',
                  'cadio_vascular',
                  'gastrointestinal',
                  'lymphatic',
                  'skin_and_subcutaneus_tissue',
                  'back_musculoskeletal',
                  'neurological',
                  'psychiatric',
                  'observations',
                  'sign'
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
     * Set the date_examined.
     *
     * @param  string  $value
     * @return void
     */
    public function setDateExaminedAttribute($value)
    {
        $this->attributes['date_examined'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
    }

    /**
     * Get date_examined in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getDateExaminedAttribute($value)
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
