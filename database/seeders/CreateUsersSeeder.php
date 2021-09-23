<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= [
                    [
                        'is_admin'=> '1',
                        'name'=>'Neika Lewii',
                        'email'=>'nlewis_admin@dolphincove.com',
                        'password'=> bcrypt('12345678'),
                        'created_by_admin' => 'system'

                    ],
                     [
                                'is_admin'=> '0',
                                'name'=>'Amy Wong',
                                'email'=>'awong@dolphincove.com',
                                'password'=> bcrypt('12345678'),
                                'created_by_admin' => 'system'

                     ],
                     [
                                'is_admin'=> '0',
                                'name'=>'Malah Lewi',
                                'email'=>'mlewi@dolphincove.com',
                                'password'=> bcrypt('12345678'),
                                'created_by_admin' => 'system'
                     ]

              ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
