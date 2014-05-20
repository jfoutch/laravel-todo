<?php  


class UsersTableSeeder extends Seeder {

  public function run() {

    DB::table('users')->delete();

    $users = array(
        array(
          'name' => 'jesse',
          'password' => Hash::make('poop'),
          'email' => 'example@example.com'

          )
      );

    DB::table('users')->insert($users);

  }

}