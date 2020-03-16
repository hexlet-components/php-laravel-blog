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

    public function testEdit()
    {
        $article = factory(Article::class)->create();
        $response = $this->get(route('articles.edit', [$article]));
        $response->assertStatus(200);
    }

    public function testStore()
    {
        $data = factory(Article::class)->make()->toArray();
        $response = $this->post(route('articles.store'), $data);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);

        $this->assertDatabaseHas('articles', ['name' => $data['name']]);
    }

    public function testUpdate()
    {
        $article = factory(Article::class)->create();
        $data = factory(Article::class)->make()->toArray();
        $response = $this->patch(route('articles.update', $article), $data);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);

        $this->assertDatabaseHas('articles', ['name' => $data['name']]);
    }

    public function testDestroy()
    {
        $article = factory(Article::class)->create();
        $response = $this->delete(route('articles.destroy', [$article]));
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);

        $this->assertDatabaseMissing('articles', ['id' => $article->id]);
    }
}
