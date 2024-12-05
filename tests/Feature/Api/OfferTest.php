<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Offer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OfferTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfOfferInJsonFile() {
        $offer = Offer::factory(2)->create();
        $response = $this->get(route('apiHomeOffer'));
        $response->assertStatus(200)->assertJsonCount(2);
    }
    public function test_CheckIfCanDeleteEntryInOfferWithApi() {
        $offer = Offer::factory(2)->create();
        $response = $this->delete(route('apiDestroyOffer', 1));
        $this->assertDatabaseCount('offers', 1);
        $response = $this->get(route('apiHomeOffer'));
        $response->assertStatus(200)->assertJsonCount(1);
    }
    public function test_CheckIfCanShowEntryInOfferInJsonFile(){
        
        $offer = Offer::factory()->create();
        $response = $this->get(route('apiShowOffer', 1));
        $response->assertStatus(200)->assertJsonFragment(['title' => $offer->title]);

    }
    public function test_CheckIfCanCreateNewEntryInOfferWithJsonFile() {
        $response = $this->post(route('apiStoreOffer', [
            'title' => 'Oferta Cafe Concha',
            'url' => 'cafeconcha.com',
            'company' => 'Cafe Concha',
            'offerStatus' => 'In progress',
            'location' => 'Cádiz',
        ]));
        $response = $this->get(route('apiHomeOffer'));
        $response->assertStatus(200)->assertJsonCount(1);
    }
    public function test_CheckIfCanUpdateEntryInOfferWithJsonFile() {
        $response = $this->post(route('apiStoreOffer', [
            'title' => 'Oferta Telecom',
            'url' => 'telecom.com',
            'company' => 'Telecom',
            'offerStatus' => 'In progress',
            'location' => 'Madrid',
        ]));
        $data = ['title' => 'Oferta Telecom'];
        $response = $this->get(route('apiHomeOffer'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
        $response = $this->put(route('apiUpdateOffer',1), [
            'title' => 'Oferta Baby',
            'url' => 'baby.com',
            'company' => 'Baby',
            'offerStatus' => 'Complete',
            'location' => 'Malaga',
        ]);
        $data = ['title' => 'Oferta Baby'];
        $response = $this->get(route('apiHomeOffer'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }
}
