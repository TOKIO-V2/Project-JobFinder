<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Offer;
use App\Models\StatusCompany;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StatusTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfStatusInJsonFile() {
        $offer = Offer::factory(5)->create();
        $status = StatusCompany::factory(2)->create();
        $response = $this->get(route('apiHomeStatus'));
        $response->assertStatus(200)->assertJsonCount(2);
    }
    public function test_CheckIfCanDeleteEntryInStatusWithApi() {
        $offer = Offer::factory(5)->create();
        $status = StatusCompany::factory(2)->create();
        $response = $this->delete(route('apiDestroyStatus', 1));
        $this->assertDatabaseCount('status_companies', 1);
        $response = $this->get(route('apiHomeStatus'));
        $response->assertStatus(200)->assertJsonCount(1);
    }
    public function test_CheckIfCanShowEntryInStatusInJsonFile(){
        $offer = Offer::factory(1)->create();
        $status = StatusCompany::factory()->create();
        $response = $this->get(route('apiShowStatus', 1));
        $response->assertStatus(200)->assertJsonFragment(['comentary' => $status->comentary]);
    }
    public function test_CheckIfCanCreateNewEntryInStatusWithJsonFile() {
        $offer = Offer::factory(1)->create();
        $response = $this->post(route('apiStoreStatus', [
            'id_offer' => 1,
            'comentary' => 'baby.com',
        ]));
        $response = $this->get(route('apiHomeStatus'));
        $response->assertStatus(200)->assertJsonCount(1);
    }
    public function test_CheckIfCanUpdateEntryInStatusWithJsonFile() {
        $offer = Offer::factory(1)->create();
        $response = $this->post(route('apiStoreStatus', [
            'id_offer' => 1,
            'comentary' => 'Oferta finalizada',
        ]));
        $data = ['comentary' => 'Oferta finalizada'];
        $response = $this->get(route('apiHomeStatus'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
        $response = $this->put(route('apiUpdateStatus',1), [
            'id_offer' => 1,
            'comentary' => 'Oferta en proceso',
        ]);
        $data = ['comentary' => 'Oferta en proceso'];
        $response = $this->get(route('apiHomeStatus'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }
}

