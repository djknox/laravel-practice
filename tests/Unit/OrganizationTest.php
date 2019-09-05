<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Organization;
use App\User;

class OrganizationTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * An organization has a name, location, and description.
     *
     * @return void
     */
    public function test_an_organization_can_be_created()
    {
        $user = new User([
    		'name' => 'test user',
            'email'  => 'test@test.com',
            'password'  => 'testuser',
        ]);

        $user->save();

    	$organization = new Organization([
    		'name' => 'Org For Testing',
            'location'  => 'Raleigh, NC',
            'description'  => 'This is an organization for testing',
        ]);
        
        $user->organizations()->save($organization);

        $this->assertDatabaseHas('organizations', [
            'user_id' => $user->id,
    		'name' => $organization->name,
            'location'  => $organization->location,
            'description'  => $organization->description,
    	]);
    }
}
