<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([

            //Cà phê
            ['category_id'=>1,'name'=>'Cà Phê Đen','quantity'=>'0','price'=>'32000','image'=>'1.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>1,'name'=>'Cà Phê Sữa','quantity'=>'0','price'=>'32000','image'=>'2.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>1,'name'=>'Bạc Sỉu','quantity'=>'0','price'=>'32000','image'=>'3.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>1,'name'=>'Capuchino','quantity'=>'0','price'=>'50000','image'=>'4.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>1,'name'=>'Caramel Machiato','quantity'=>'0','price'=>'50000','image'=>'5.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>1,'name'=>'Bạc Sỉu','quantity'=>'0','price'=>'32000','image'=>'6.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>1,'name'=>'Espressco','quantity'=>'0','price'=>'32000','image'=>'7.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>1,'name'=>'Latte','quantity'=>'0','price'=>'32000','image'=>'8.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>1,'name'=>'Mocha','quantity'=>'0','price'=>'32000','image'=>'9.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            //Cold Brew
            ['category_id'=>3,'name'=>'Cold Brew Raspberry','quantity'=>'0','price'=>'50000','image'=>'10.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>3,'name'=>'Cold Brew Milk','quantity'=>'0','price'=>'45000','image'=>'11.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>3,'name'=>'Cold Brew Classic','quantity'=>'0','price'=>'50000','image'=>'12.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            // TRà trái cây
            ['category_id'=>5,'name'=>'Trà Long Nhãn Hạt Chia','quantity'=>'0','price'=>'45000','image'=>'13.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>5,'name'=>'Trà Hạt Sen','quantity'=>'0','price'=>'50000','image'=>'14.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>5,'name'=>'Trà Đào Cam Sả','quantity'=>'0','price'=>'50000','image'=>'15.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            // Trà Matcha
            ['category_id'=>6,'name'=>'Trà Sữa Mắc Ca Trân Châu','quantity'=>'0','price'=>'50000','image'=>'16.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>6,'name'=>'Trà Long Nhãn Hạt Chia','quantity'=>'0','price'=>'45000','image'=>'17.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>6,'name'=>'Trà Matcha Machiato','quantity'=>'0','price'=>'45000','image'=>'18.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>6,'name'=>'Trà Đen Machiato','quantity'=>'0','price'=>'45000','image'=>'19.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>6,'name'=>'Hồng Trà Latte Machiato','quantity'=>'0','price'=>'45000','image'=>'20.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            //Đá Xay
            ['category_id'=>2,'name'=>'Chanh Xả Đá Xay','quantity'=>'0','price'=>'49000','image'=>'21.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>2,'name'=>'Cà Phê Đá Xay','quantity'=>'0','price'=>'49000','image'=>'22.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>2,'name'=>'Đào Việt Quất Đá Xay','quantity'=>'0','price'=>'49000','image'=>'23.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>2,'name'=>'Raspberry Đá Xay','quantity'=>'0','price'=>'49000','image'=>'24.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>2,'name'=>'Blueberry Đá Xay','quantity'=>'0','price'=>'49000','image'=>'25.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>2,'name'=>'Cookies Đá Xay','quantity'=>'0','price'=>'49000','image'=>'26.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>2,'name'=>'Matcha Xả Đá Xay','quantity'=>'0','price'=>'49000','image'=>'27.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>2,'name'=>'Matcha Latte','quantity'=>'0','price'=>'49000','image'=>'28.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>2,'name'=>'Socola Đá Xay','quantity'=>'0','price'=>'49000','image'=>'29.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            //Bánh & Snake
            ['category_id'=>7,'name'=>'Bánh bao 2 trứng','quantity'=>'100','price'=>'25000','image'=>'30.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>7,'name'=>'Bánh Mì Chà Bông','quantity'=>'100','price'=>'32000','image'=>'31.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>7,'name'=>'Bánh Mì Que','quantity'=>'100','price'=>'12000','image'=>'32.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>7,'name'=>'Bông Lan Trứng Muối','quantity'=>'100','price'=>'29000','image'=>'33.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>7,'name'=>'Đậu Phộng Tỏi Ớt','quantity'=>'100','price'=>'10000','image'=>'34.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['category_id'=>7,'name'=>'Mít Xấy','quantity'=>'100','price'=>'20000','image'=>'35.png','popular'=>'4','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
