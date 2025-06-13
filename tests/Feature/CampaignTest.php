<?php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Campaign;

class CampaignTest extends TestCase
{
    public function test_user_can_view_campaigns()
    {
        $response = $this->get('/campaigns');
        $response->assertStatus(200);
    }
    
    public function test_authenticated_user_can_create_campaign()
    {
        $user = User::factory()->create();
        
        $response = $this->actingAs($user)->post('/campaigns', [
            'title' => 'Test Campaign',
            'description' => 'Test Description',
            'goal_amount' => 1000
        ]);
        
        $response->assertRedirect();
        $this->assertDatabaseHas('campaigns', [
            'title' => 'Test Campaign'
        ]);
    }
}