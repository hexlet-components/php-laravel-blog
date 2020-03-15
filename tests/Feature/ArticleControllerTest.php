<?php

namespace Tests\Feature;

use Tests\TestCase;

use App\Article;

class ArticleControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        factory(Article::class, 2)->make();
    }

    public function testIndex()
    {
        $response = $this->get(route('articles.index'));
        $response->assertStatus(200);
    }

    public function testCreate()
    {
        $response = $this->get(route('articles.create'));
        $response->assertStatus(200);
    }

    /* public function testEdit() */
    /* { */
    /*     $article = factory(Article::class)->make(); */
    /*     $response = $this->get(route('articles.edit', [$article])); */
    /*     $response->assertStatus(200); */
    /* } */
}
