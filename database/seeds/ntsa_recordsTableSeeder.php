<?php

use Illuminate\Database\Seeder;

class ntsa_recordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ntsa_records')->insert([
            'licence_number' => '2493957',
            'first_name' => 'Farhia',
            'surname' => 'Mohammed',
            'expiery' => '2020-03-31',
            'national_id'=>'45456733',
        ]);
         DB::table('ntsa_records')->insert([
            'licence_number' => '2483943',
            'first_name' => 'Steve',
            'surname' => 'Biko',
            'expiery' => '2019-07-27',
            'national_id'=>'45934444',
        ]);
        DB::table('ntsa_records')->insert([
            'licence_number' => '2473236',
            'first_name' => 'Janet',
            'surname' => 'Kabui',
            'expiery' => '2019-09-09',
            'national_id'=>'46574533',
        ]);
        DB::table('ntsa_records')->insert([
            'licence_number' => '2467603',
            'first_name' => 'Mercy',
            'surname' => 'Bonareri',
            'expiery' => '2018-04-30',
            'national_id'=>'44853945',
        ]);
        DB::table('ntsa_records')->insert([
            'licence_number' => '2458932',
            'first_name' => 'Louisa',
            'surname' => 'Wamuyu',
            'expiery' => '2018-09-18',
            'national_id'=>'45934538',
        ]);
        DB::table('ntsa_records')->insert([
            'licence_number' => '3998978',
            'first_name' => 'Solace',
            'surname' => 'Jemutai',
            'expiery' => '2020-03-31',
            'national_id'=>'45664533',
        ]);
         DB::table('ntsa_records')->insert([
            'licence_number' => '3222456',
            'first_name' => 'Nelly',
            'surname' => 'Gathoni',
            'expiery' => '2019-07-27',
            'national_id'=>'43434533',
        ]);
        DB::table('ntsa_records')->insert([
            'licence_number' => '3243332',
            'first_name' => 'Joel',
            'surname' => 'Mumo',
            'expiery' => '2019-09-09',
            'national_id'=>'45934453',
        ]);
        DB::table('ntsa_records')->insert([
            'licence_number' => '3776894',
            'first_name' => 'Victor',
            'surname' => 'Chanzu',
            'expiery' => '2018-04-30',
            'national_id'=>'45934633',
        ]);
        DB::table('ntsa_records')->insert([
            'licence_number' => '3112341',
            'first_name' => 'Xavior',
            'surname' => 'Jagero',
            'expiery' => '2018-09-18',
            'national_id'=>'45934533',
        ]);
    }
}
