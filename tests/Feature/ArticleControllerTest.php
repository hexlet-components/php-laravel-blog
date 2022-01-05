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
        $factoryData = Article::factory()->make()->toArray();
        $data = \Arr::only($factoryData, ['name', 'body']);
        $response = $this->followingRedirects()->post(route('articles.store'), $data);
        $response->assertSessionHasNoErrors();
        $response->assertSeeText($data['name']);

        $this->assertDatabaseHas('articles', $data);
    }

    public function testUpdate()
    {
        $article = Article::factory()->create();
        $factoryData = Article::factory()->make()->toArray();
        $data = \Arr::only($factoryData, ['name', 'body']);
        $response = $this->followingRedirects()->patch(route('articles.update', $article), $data);
        $response->assertSessionHasNoErrors();
        $response->assertSeeText($data['name']);

        $this->assertDatabaseHas('articles', $data);
    }

    public function testDestroy()
    {
        $article = Article::factory()->create();
        $response = $this->delete(route('articles.destroy', [$article]));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect(route('articles.index'));

        $this->assertDatabaseMissing('articles', ['id' => $article->id]);
    }
}
