<?php

use Illuminate\Database\Seeder;
use App\Petition;

class PetitionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Petition::create(array(
            'title' => 'Doctors of Arabia',
            'user_id' => 2,
            'petition_key' => 'Doctors-of-Arabia',
            'summary' => 'Doctors of Arabia is a non-profit effort to fund doctors in Arabia.',
            'private' => TRUE,
        ));

        Petition::create(array(
        	'title' => 'Lyft',
            'user_id' => 1,
            'petition_key' => 'Lyft-1',
            'summary' => 'We are trying to raise awareness for Lyfts various campaigns',
            'private' => FALSE,
        ));
    }
}
