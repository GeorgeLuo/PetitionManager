<?php

use Illuminate\Database\Seeder;
use App\Signature;

class SignatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Eloquent::unguard();

	    Signature::create(array(
        	'petition_id' => 'Lyft-1',
            'firstname' => 'Jose',
            'lastname' => 'Luo',
            'email' => 'george@yahoo.com',
            'message' => 'Good luck!', 
            'phone' => '703-123-4567',
	    ));

        Signature::create(array(
        	'petition_id' => 'Lyft-1',
            'firstname' => 'George',
            'lastname' => 'Luo',
            'email' => 'george@yahoo.com',
            'message' => 'Good luck!', 
            'phone' => '703-123-4567',
        ));

        Signature::create(array(
        	'petition_id' => 'Lyft-1',
            'firstname' => 'Chris',
            'lastname' => 'Lupus',
            'email' => 'Chris.l@yahoo.com',
            'message' => "I'm telling everyone I know!", 
            'phone' => '703-123-4444',
        ));
    }
}
