<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStore()
    {
        $response = $this->json('POST', '/api/questions', [
            'question' => "Nova Pergunta",
            'type' => "ABERTA",
            'open_answer' => "..",
            'close_answer' =>"{\"A\": \"Birros\", \"B\":\"Robertinho\",\"C\":\"Henrique\",\"D\":\"PHP\"}" ,
            'feedback' => "A",
            'user_id' => 1,
        ]);
        $response->assertStatus(201);
    }

    public function testUpdate()
    {
        $response = $this->json('PUT', '/api/questions/14', [
            'question' => "Nova Pergunta",
            'type' => "ABERTA",
            'open_answer' => "..",
            'close_answer' =>"{\"A\": \"Birro\", \"B\":\"Robertinho\",\"C\":\"Henrique\",\"D\":\"PHP\"}" ,
            'feedback' => "A",
            'user_id' => 1,
        ]);
        $response->assertStatus(200);
    }

    public function testList()
    {
        $response = $this->get('/api/questions');
        $response->assertStatus(200);
    }


    public function testGet()
    {
        $response = $this->get('/api/questions/5');
        $response->assertStatus(200);
    }


    public function testDelete()
    {
        $response = $this->delete('/api/questions/5');
        $response->assertStatus(204);
    }

}
