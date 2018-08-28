<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$time = Carbon::now()->format('Y-m-d H:i:s');
    	// dd($time);
        DB::table('hotels')->insert([
            [
                'name' 			=> 'Hotel 1',
                'country' 		=> 'Australia',
                'city'          => 'Sydney',
                'banner_image'	=> 'imgs/InsiderSuite_Our_Story.jpg',
                'list_quote'	=> 'Hotel Slang',
                'time_remaining'=> $time,
                'discount'		=> -20
            ],[
                'name' 			=> 'Hotel 1',
                'country' 		=> 'Australia',
                'city'          => 'Sydney',
                'banner_image'	=> 'imgs/InsiderSuite_Our_Story.jpg',
                'list_quote'	=> 'Hotel Slang',
                'time_remaining'=> $time,
                'discount'		=> -20
            ],[
                'name' 			=> 'Hotel 1',
                'country' 		=> 'Australia',
                'city'          => 'Sydney',
                'banner_image'	=> 'imgs/InsiderSuite_Our_Story.jpg',
                'list_quote'	=> 'Hotel Slang',
                'time_remaining'=> $time,
                'discount'		=> -20
            ],[
                'name' 			=> 'Hotel 1',
                'country' 		=> 'Australia',
                'city'          => 'Sydney',
                'banner_image'	=> 'imgs/InsiderSuite_Our_Story.jpg',
                'list_quote'	=> 'Hotel Slang',
                'time_remaining'=> $time,
                'discount'		=> -20
            ],
        ]);
    }
}
