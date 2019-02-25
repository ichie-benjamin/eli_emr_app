<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class InfantMortality extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'infant_mortalities';

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
                  'year_of_death',
                  'first_name',
                  'last_name',
                  'sex',
                  'age',
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
     * Set the year_of_death.
     *
     * @param  string  $value
     * @return void
     */
//    public function setYearOfDeathAttribute($value)
//    {
//        $this->attributes['year_of_death'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
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
     * Get year_of_death in array format
     *
     * @param  string  $value
     * @return array
     */
//    public function getYearOfDeathAttribute($value)
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
