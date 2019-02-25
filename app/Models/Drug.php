<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Drug extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'drugs';

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
                  'name',
                  'quantity',
                  'manufactured_date',
                  'expiry_date'
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
     * Set the manufactured_date.
     *
     * @param  string  $value
     * @return void
     */
//    public function setManufacturedDateAttribute($value)
//    {
//        $this->attributes['manufactured_date'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
//    }

    /**
     * Set the expiry_date.
     *
     * @param  string  $value
     * @return void
     */
//    public function setExpiryDateAttribute($value)
//    {
//        $this->attributes['expiry_date'] = !empty($value) ? \DateTime::createFromFormat($this->getDateFormat(), $value) : null;
//    }

    /**
     * Get manufactured_date in array format
     *
     * @param  string  $value
     * @return array
     */
//    public function getManufacturedDateAttribute($value)
//    {
//        return \DateTime::createFromFormat('j/n/Y', $value);
//
//    }

    /**
     * Get expiry_date in array format
     *
     * @param  string  $value
     * @return array
     */
//    public function getExpiryDateAttribute($value)
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
