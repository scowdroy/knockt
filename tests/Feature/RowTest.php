<?php

namespace Tests\Feature;

use App\Machine;
use App\Row;
use Tests\TestCase;

class RowTest extends TestCase
{
    /**
     * A manchine can be retrieved.
     *
     * @test
     * @return void
     */
    public function it_can_be_retrieved(): void
    {
        $response = $this->call('GET', '/api/rows', ['machine_id' => Machine::first()->id]);

        $response->assertStatus(200);
    }

    /**
     * A manchine can be stored.
     *
     * @test
     * @return void
     */
    public function it_can_be_stored(): void
    {
        $row = factory(Row::class)->raw();

        $row['machine_id'] = Row::first()->machine_id;

        $response = $this->post('/api/rows', $row);

        $response->assertStatus(201);
    }

    /**
     * A manchine can be updated.
     *
     * @test
     * @return void
     */
    public function it_can_be_updated(): void
    {
        $row = Row::first();

        $row['name'] = 'Test';

        $response = $this->put('/api/rows/' . $row->id, $row->toArray());

        $response->assertStatus(200);
    }

    /**
     * A manchine can be destroyed.
     *
     * @test
     * @return void
     */
    public function it_can_be_destroyed(): void
    {
        $row = Row::first();

        $response = $this->delete('/api/rows/' . $row->id);

        $response->assertStatus(204);
    }
}
