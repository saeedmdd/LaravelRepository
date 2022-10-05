<?php

namespace App\Services\Post;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;

class PostRepository implements PostRepositoryInterface
{

    public function getAllPosts(): array|\Illuminate\Database\Eloquent\Collection|\LaravelIdea\Helper\App\Models\_IH_Post_C
    {
        return Post::all();
    }

    public function findPostById($postId): Post
    {
        return Post::firstOrFail($postId);
    }


    public function deletePost($postId)
    {
        Post::destroy($postId);
    }

    public function createPost(array $posts): Post
    {
        return Post::create($posts);
    }


    public function getOrderBy($column, $order)
    {
        return Post::orderBy($column,$order);
    }

    public function getPostsByUser(User $user)
    {
        return $user->posts();
    }

    public function updatePost($postId,array $newDetails): void
    {
         Post::firstOrFail($postId)->update($newDetails);
    }
}
