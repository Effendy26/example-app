<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Asep',
               'email'=>'asep@gmail.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Effendy',
               'email'=>'epen@gmail.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Joko',
               'email'=>'joko@gmail.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ], 
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}