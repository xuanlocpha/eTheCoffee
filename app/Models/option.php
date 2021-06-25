<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    use HasFactory;
    protected $table = 'option';
    protected $primaryKey = 'id';
    protected $fillable = ['name','status'];
    public $timestamps = true;

    public function product_option(){
        return $this->hasMany('App\Models\product_option','option_id','id');
    }
}
