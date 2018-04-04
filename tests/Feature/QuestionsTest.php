<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Questions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class QuestionsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use RefreshDatabase, WithFaker;
    private $question;

    public function setUp()
    {

        parent::setUp();
        $this->seed();
        $this->question = Questions::first();
    }

    public function testStore()
    {
        $response = $this->json('POST', '/api/questions', [
            'question' => "Nova Pergunta",
            'type' => "ABERTA",
            'open_answer' => "..",
            'close_answer' =>"{\"A\": \"Birro\", \"B\":\"Robertinho\",\"C\":\"Henrique\",\"D\":\"PHP\"}" ,
            'feedback' => "A",
            'user_id' => 1,
        ]);
        $response->assertStatus(201);
    }

    public function testUpdate()
    {
        $response = $this->json('PUT', '/api/questions/'. $this->question->id, [
            'question' => "Nova Pergunta",
            'type' => "1111111",
            'open_answer' => "..",
            'close_answer' =>"{\"A\": \"Birros\", \"B\":\"Robertinho\",\"C\":\"Henrique\",\"D\":\"PHP\"}" ,
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
        $response = $this->get('/api/questions/'.$this->question->id);
        $response->assertStatus(200);
    }


    public function testDelete()
    {
        $response = $this->delete('/api/questions/'.$this->question->id);
        $response->assertStatus(204);
    }

}
