<?php

class ExampleTest extends FeatureTestCase
{
    
    function test_basic_example()
    {
        $user=factory(\App\User::class)->create([
            'name' => 'Jon Labrador',
            'email' => 'jon@gmail.com'
        ]);
        
        $this->actingAs($user, 'api')
            ->visit('api/user')
             ->see('Jon Labrador')
             ->see('jon@gmail.com');
    }
}
