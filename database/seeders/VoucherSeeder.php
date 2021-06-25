<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('voucher')->insert([
            ['name'=>'Giảm 50% cho các sản phẩm Cà Phê','Description'=>'Cửa hàng xin được gửi đến khách
             hàng lời tri an và cảm ơn bằng việc giảm giá 50% với mặt hàng Cafe','coupon_code'=>'56346125121',
            'qr_code'=>'56346125121','start_date'=>'2021/06/23','end_date'=>'2021/07/3','disscount_unit'=>'5','disscount'=>'50',
            'minimum_order'=>'1','isRewardAllowed'=>'1','isDirectApplication'=>'1','reward_Point'=>'1000','status'=>'1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

            ['name'=>'Giảm 30% cho các sản phẩm Cà Phê','Description'=>'Cửa hàng xin được gửi đến khách
            hàng lời tri an và cảm ơn bằng việc giảm giá 30% với mặt hàng Cafe','coupon_code'=>'56346125121',
           'qr_code'=>'56346125121','start_date'=>'2021/06/23','end_date'=>'2021/07/3','disscount_unit'=>'5','disscount'=>'30',
           'minimum_order'=>'1','isRewardAllowed'=>'1','isDirectApplication'=>'1','reward_Point'=>'1000','status'=>'1',
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
           
           ['name'=>'Giảm 35% cho các sản phẩm Cà Phê','Description'=>'Cửa hàng xin được gửi đến khách
           hàng lời tri an và cảm ơn bằng việc giảm giá 35% với mặt hàng Cafe','coupon_code'=>'56346125121',
          'qr_code'=>'56346125121','start_date'=>'2021/06/23','end_date'=>'2021/07/3','disscount_unit'=>'5','disscount'=>'35',
          'minimum_order'=>'1','isRewardAllowed'=>'1','isDirectApplication'=>'1','reward_Point'=>'1000','status'=>'1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
