<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    //
    //use Notifiable;
    protected $primaryKey = 'es_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /**
    protected $fillable = [
        'id','es_id', 'resume', 'gender', 'mobile_number', 'nationality', 'birth_date', 'created_at', 'updated_at',
    ];
    */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * @return mixed
     * checks for user type to be returnrd
     */

    public function checkUserType(){

        return $this -> type;
    }
}
