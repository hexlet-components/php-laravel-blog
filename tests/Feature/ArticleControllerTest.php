<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Article;

class ArticleControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Article::factory()->count(2)->make();
    }

    public function testIndex()
    {
        $response = $this->get(route('articles.index'));
        $response->assertOk();
    }

    public function testCreate()
    {
        $response = $this->get(route('articles.create'));
        $response->assertOk();
    }

    public function testEdit()
    {
        $article = Article::factory()->create();
        $response = $this->get(route('articles.edit', [$article]));
        $response->assertOk();
    }

    public function testStore()
    {
        $data = Article::factory()->make()->only('name', 'body');
        $response = $this->post(route('articles.store'), $data);
        $response->assertRedirect(route('articles.index'));
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseHas('articles', $data);
    }

    public function testUpdate()
    {
        $article = Article::factory()->create();
        $data = Article::factory()->make()->only('name', 'body');

        $response = $this->patch(route('articles.update', $article), $data);
        $response->assertRedirect(route('articles.index'));
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseHas('articles', $data);
    }

    public function testDestroy()
    {
        $article = Article::factory()->create();
        $response = $this->delete(route('articles.destroy', [$article]));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('articles.index'));

        $this->assertDatabaseMissing('articles', $article->only('id'));
    }
}
