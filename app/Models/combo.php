<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class combo extends Model
{
    use HasFactory;
    protected $table = 'combo';
    protected $primaryKey = 'id';
    protected $fillable = ['name','description','actual_price','discount_price','start_date','end_date'];
    public $timestamps = true;

    public function combo_detail(){
        return $this->hasMany('App\Models\combo_detail','combo_id','id');
    }
}
