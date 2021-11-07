<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try{
            DB::beginTransaction();
            if(array_key_exists('tags_id',$data)){
                $tagsId = $data['tags_id'];
                unset($data['tags_id']);
            }
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);

            $post = Post::firstOrCreate($data);
            if(isset($tagsId)) {
                $post->tags()->attach($tagsId);
            }
            DB::commit();
        } catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $post)
    {
        DB::beginTransaction();
        try{
            if(array_key_exists('tags_id',$data)) {
                $tagsId = $data['tags_id'];
                unset($data['tags_id']);
            }

            if( array_key_exists('preview_image',$data)){
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            if( array_key_exists('main_image',$data)) {
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }

            $post->update($data);

            if(isset($tagsId)) {
                $post->tags()->sync($tagsId);
            }

            DB::commit();
        } catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }

    }
}
