<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    /** @test */
    public function can_create_new_post()
    {
        $title = 'Some title';
        $content = 'Some content';

        $post = Post::whereTitle($title)->first();

        $this->assertNull($post);

        Livewire::test(CreatePost::class)
            ->set('title', $title)
            ->set('content', $content)
            ->call('save');

        $post = Post::whereTitle($title)->first();

        $this->assertNotNull($post);
        $this->assertEquals($title, $post->title);
        $this->assertEquals($content, $post->content);
    }

    /** @test */
    public function title_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title', '')
            ->call('save')
            ->assertHasErrors(['title' => 'required']);
    }
}
