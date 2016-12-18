<?php
/**
 * Created by PhpStorm.
 * User: lahir
 * Date: 10/31/2016
 * Time: 11:54 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class EmploymentProvider extends Model
{
    use Notifiable;


/**
    public function jobs(){
        return $this -> hasMany(Job::class);
    }
 */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $table = 'employment_provider';
    protected $fillable = [
        'id', 'ep_id','company_name','address_1','address_2','city','province','country','size','type','phone','start_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}