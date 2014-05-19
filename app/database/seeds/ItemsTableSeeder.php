<?php 



class ItemsTableSeeder extends Seeder {

  public function run() {

    DB::table('items')->delete();

    $items = array(
        array(
          'owner_id' => 1,
          'name' => ('pick up milk'),
          'done' => false

          ),

        array(
          'owner_id' => 1,
          'name' => 'walk the dogs',
          'done' => true
          ),

        array(
          'owner_id' => 1,
          'name' => 'cooke the poop',
          'done' => false
          )

      );

    DB::table('items')->insert($items);

  }

}