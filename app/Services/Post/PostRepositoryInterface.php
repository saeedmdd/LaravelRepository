<?php

namespace App\Services\Post;

use App\Models\Post;
use App\Models\User;

interface PostRepositoryInterface
{
    public function getAllPosts(): array|\Illuminate\Database\Eloquent\Collection|\LaravelIdea\Helper\App\Models\_IH_Post_C;
    public function findPostById($postId);
    public function deletePost(array|int $postId);
    public function createPost(array $posts);
    public function getOrderBy($column,$order);
    public function getPostsByUser(User $user);
    public function updatePost($postId,array $newDetails);

}

