<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\HolidayPlan;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HolidayPlanTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        Passport::actingAs(User::factory()->create(), ['*']);
    }

    /** @test */
    public function it_can_list_all_holiday_plans()
    {
        HolidayPlan::factory()->count(3)->create();

        $response = $this->getJson('/api/holiday-plans');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    /** @test */
    public function it_can_create_a_holiday_plan()
    {
        $data = [
            'title' => 'Férias',
            'description' => 'Uma viagem agradável para a praia.',
            'date' => '2024-08-01',
            'location' => 'Hawaii',
            'participants' => 'John, Mary',
        ];

        $response = $this->postJson('/api/holiday-plans', $data);

        $response->assertStatus(201)
                 ->assertJson($data);
    }

    /** @test */
    public function it_can_show_a_holiday_plan()
    {
        $holidayPlan = HolidayPlan::factory()->create();

        $response = $this->getJson("/api/holiday-plans/{$holidayPlan->id}");

        $response->assertStatus(200)
                 ->assertJson([
                     'id' => $holidayPlan->id,
                     'title' => $holidayPlan->title,
                     'description' => $holidayPlan->description,
                     'date' => $holidayPlan->date,
                     'location' => $holidayPlan->location,
                     'participants' => $holidayPlan->participants,
                 ]);
    }

    /** @test */
    public function it_can_update_a_holiday_plan()
    {
        $holidayPlan = HolidayPlan::factory()->create();

        $data = [
            'title' => 'Férias Atualizadas',
            'description' => 'Uma viagem agradável para a praia com amigos.',
            'date' => '2024-08-02',
            'location' => 'Hawaii',
            'participants' => 'John, Mary, Alice',
        ];

        $response = $this->putJson("/api/holiday-plans/{$holidayPlan->id}", $data);

        $response->assertStatus(200)
                 ->assertJson($data);

        $this->assertDatabaseHas('holiday_plans', $data);
    }

    /** @test */
    public function it_can_delete_a_holiday_plan()
    {
        $holidayPlan = HolidayPlan::factory()->create();

        $response = $this->deleteJson("/api/holiday-plans/{$holidayPlan->id}");

        $response->assertStatus(204);

        $this->assertDatabaseMissing('holiday_plans', [
            'id' => $holidayPlan->id,
        ]);
    }

    /** @test */
    public function it_can_generate_a_pdf_for_holiday_plan()
    {
        $holidayPlan = HolidayPlan::factory()->create();

        $response = $this->postJson("/api/holiday-plans/{$holidayPlan->id}/generate-pdf");

        $response->assertStatus(200)
                 ->assertHeader('Content-Type', 'application/pdf');
    }

    /** @test */
    public function it_validates_required_fields_when_creating_a_holiday_plan()
    {
        $response = $this->postJson('/api/holiday-plans', []);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['title', 'description', 'date', 'location']);
    }

    /** @test */
    public function it_validates_required_fields_when_updating_a_holiday_plan()
    {
        $holidayPlan = HolidayPlan::factory()->create();

        $response = $this->putJson("/api/holiday-plans/{$holidayPlan->id}", []);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['title', 'description', 'date', 'location']);
    }

    /** @test */
    public function it_returns_404_if_holiday_plan_is_not_found()
    {
        $response = $this->getJson('/api/holiday-plans/999');

        $response->assertStatus(404);
    }
}
