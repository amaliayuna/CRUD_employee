<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
  //beri tau nama table
  protected $table ='supplier';
  public $timestamps= false;
  //yang kedua atributnya
  protected $fillable =['supplier_id','suplier_name','supplier_address'];
}
