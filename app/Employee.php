<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //beri tau nama table
    protected $table ='employee';


    protected $primaryKey = 'employee_id';

    public $timestamps= false;
    protected $fillable =[
      'employee_id',
      'employee_name',
      'employee_address',
      'employee_phone_number'
    ];

}
