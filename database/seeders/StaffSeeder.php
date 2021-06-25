<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('staff')->insert([
            ['username'=>'xuanloc081120','password'=>bcrypt('P@ssword1'),'first_name'=>'Xuân Lộc','last_name'=>'Phạm','gender'=>1,'birthday'=>'2000/11/08','phone_number'=>'0774740192','email'=>'xuanloc.hcm2018@gmail.com','address'=>'954/20 Quang Trung ,P8 ,Q.Gò Vấp','permission'=>'1','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['username'=>'locphuc123','password'=>bcrypt('P@ssword1'),'first_name'=>'Lộc Phúc','last_name'=>'Đinh','gender'=>1,'birthday'=>'2000/06/23','phone_number'=>'0774740192','email'=>'locphuc.hcm2018@gmail.com','address'=>'954/20 Quang Trung ,P8 ,Q.Gò Vấp','permission'=>'1','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['username'=>'minhphuong','password'=>bcrypt('P@ssword1'),'first_name'=>'Minh Phương','last_name'=>'Đỗ','gender'=>2,'birthday'=>'2000/11/08','phone_number'=>'0774740192','email'=>'xuanloc.hcm2018@gmail.com','address'=>'954/20 Quang Trung ,P8 ,Q.Gò Vấp','permission'=>'2','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['username'=>'huuhoang','password'=>bcrypt('P@ssword1'),'first_name'=>'Hữu Hoàng','last_name'=>'Trần','gender'=>1,'birthday'=>'2000/11/08','phone_number'=>'0774740192','email'=>'xuanloc.hcm2018@gmail.com','address'=>'954/20 Quang Trung ,P8 ,Q.Gò Vấp','permission'=>'3','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['username'=>'anhtu','password'=>bcrypt('P@ssword1'),'first_name'=>'Anh Tú','last_name'=>'Nguyễn','gender'=>1,'birthday'=>'2000/11/08','phone_number'=>'0774740192','email'=>'xuanloc.hcm2018@gmail.com','address'=>'954/20 Quang Trung ,P8 ,Q.Gò Vấp','permission'=>'3','status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ]);
    }
}
