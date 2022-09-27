<?php

namespace App\Service;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use mysql_xdevapi\Exception;

class PostService extends Controller
{
    public function store($data)
    {
        try {
            if(isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
            }
            unset($data['tag_ids']);
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            $post = Post::firstOrCreate($data);
            if(isset($tagIds)) {
                $post->tags()->attach($tagIds);
            }
        } catch (Exception $exception) {
            abort(500);
        }

    }

    public function update()
    {

    }
}
