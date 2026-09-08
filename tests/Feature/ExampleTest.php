<?php

namespace Tests\Feature;

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_returns_successful_response(): void
    {
        $this->seed();
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_about_page_returns_successful_response(): void
    {
        $response = $this->get('/tentang-kami');
        $response->assertStatus(200);
    }

    public function test_services_index_page_returns_successful_response(): void
    {
        $this->seed();
        $response = $this->get('/layanan');
        $response->assertStatus(200);
    }

    public function test_service_show_page_returns_successful_response(): void
    {
        $this->seed();
        $service = Service::first();
        $response = $this->get('/layanan/' . $service->slug);
        $response->assertStatus(200);
    }

    public function test_areas_page_returns_successful_response(): void
    {
        $this->seed();
        $response = $this->get('/wilayah-layanan');
        $response->assertStatus(200);
    }

    public function test_gallery_page_returns_successful_response(): void
    {
        $this->seed();
        $response = $this->get('/galeri');
        $response->assertStatus(200);
    }

    public function test_contact_page_returns_not_found(): void
    {
        $response = $this->get('/kontak');
        $response->assertStatus(404);
    }
}
