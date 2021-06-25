<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voucher extends Model
{
    use HasFactory;
    protected $table = 'voucher';
    protected $primaryKey = 'id';
    protected $fillable = ['name','description','coupon_Code','qr_Code','start_Date','end_Date',
    'disscount_Unit','disscount','minimum_Order','isRewardAllowed','isDirectApplication','reward_Point','status'];
    public $timestamps = true;

    // 1-n
    public function product_voucher(){
        return $this->hasMany('App\Models\product_voucher','voucher_id','id');
    }

      // 1-n
      public function category_voucher(){
        return $this->hasMany('App\Models\category_voucher','voucher_id','id');
    }
    
}
