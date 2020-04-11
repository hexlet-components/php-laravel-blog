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
        $response->assertOk();
    }

    public function testCreate()
    {
        $response = $this->get(route('articles.create'));
        $response->assertOk();
    }

    public function testEdit()
    {
        $article = factory(Article::class)->create();
        $response = $this->get(route('articles.edit', [$article]));
        $response->assertOk();
    }

    public function testStore()
    {
        $factoryData = factory(Article::class)->make()->toArray();
        $data = \Arr::only($factoryData, ['name', 'body']);
        $response = $this->post(route('articles.store'), $data);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseHas('articles', $data);
    }

    public function testUpdate()
    {
        $article = factory(Article::class)->create();
        $factoryData = factory(Article::class)->make()->toArray();
        $data = \Arr::only($factoryData, ['name', 'body']);
        $response = $this->patch(route('articles.update', $article), $data);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseHas('articles', $data);
    }

    public function testDestroy()
    {
        $article = factory(Article::class)->create();
        $response = $this->delete(route('articles.destroy', [$article]));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseMissing('articles', ['id' => $article->id]);
    }
}
