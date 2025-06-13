<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Campaign;

class CampaignTest extends TestCase
{
    public function test_campaign_has_required_attributes()
    {
        $campaign = new Campaign([
            'title' => 'Test Campaign',
            'description' => 'Test Description',
            'goal_amount' => 1000
        ]);
        
        $this->assertEquals('Test Campaign', $campaign->title);
        $this->assertEquals(1000, $campaign->goal_amount);
    }
}