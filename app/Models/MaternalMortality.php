<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class MaternalMortality extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'maternal_mortalities';

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
                  'date_time',
                  'first_name',
                  'last_name',
                  'sex',
                  'date_of_birth',
                  'facility_id',
                  'ethnicity_id',
                  'causes_of_death'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
//               'date_time',
//               'date_of_birth',
               'deleted_at'
           ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the facility for this model.
     */
    public function facility()
    {
        return $this->belongsTo('App\Models\Facility','facility_id');
    }

    /**
     * Get the ethnicity for this model.
     */
    public function ethnicity()
    {
        return $this->belongsTo('App\Models\Ethnicity','ethnicity_id');
    }

    /**
     * Set the date_time.
     *
     * @param  string  $value
     * @return void
     */
//    public function setDateTimeAttribute($value)
//    {
//        $this->attributes['date_time'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
//    }

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
     * Set the causes_of_death.
     *
     * @param  string  $value
     * @return void
     */
    public function setCausesOfDeathAttribute($value)
    {
        $this->attributes['causes_of_death'] = json_encode($value);
    }

    /**
     * Get date_time in array format
     *
     * @param  string  $value
     * @return array
     */
//    public function getDateTimeAttribute($value)
//    {
//        return \DateTime::createFromFormat('j/n/Y g:i A', $value);
//
//    }

    /**
     * Get date_of_birth in array format
     *
     * @param  string  $value
     * @return array
     */
//    public function getDateOfBirthAttribute($value)
//    {
//        return \DateTime::createFromFormat('j/n/Y g:i A', $value);
//
//    }

    /**
     * Get causes_of_death in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getCausesOfDeathAttribute($value)
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
