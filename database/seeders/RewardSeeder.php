<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reward')->insert([
            ['name'=>'Bình Giữ Nhiệt','image'=>'1.png','description'=>'Sản phẩm là một món quả của cửa hàng muốn tri ân đến bạn','start_date'=>'2021/06/23','end_date'=>'2021/12/23','point'=>'3000','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name'=>'Bình Thủy Tinh','image'=>'2.png','description'=>'Sản phẩm là một món quả của cửa hàng muốn tri ân đến bạn','start_date'=>'2021/06/23','end_date'=>'2021/12/23','point'=>'3000','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name'=>'Áo Thun','image'=>'3.png','description'=>'Sản phẩm là một món quả của cửa hàng muốn tri ân đến bạn','start_date'=>'2021/06/23','end_date'=>'2021/12/23','point'=>'3000','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name'=>'Áo Mưa','image'=>'4.png','description'=>'Sản phẩm là một món quả của cửa hàng muốn tri ân đến bạn','start_date'=>'2021/06/23','end_date'=>'2021/12/23','point'=>'3000','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name'=>'Túi Vải Summer','image'=>'5.png','description'=>'Sản phẩm là một món quả của cửa hàng muốn tri ân đến bạn','start_date'=>'2021/06/23','end_date'=>'2021/12/23','point'=>'3000','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name'=>'Mũ Lưỡi Trai','image'=>'6.png','description'=>'Sản phẩm là một món quả của cửa hàng muốn tri ân đến bạn','start_date'=>'2021/06/23','end_date'=>'2021/12/23','point'=>'3000','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name'=>'Giấy Màu','image'=>'7.png','description'=>'Sản phẩm là một món quả của cửa hàng muốn tri ân đến bạn','start_date'=>'2021/06/23','end_date'=>'2021/12/23','point'=>'3000','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
