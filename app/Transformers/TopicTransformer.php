<?php

namespace App\Transformers;

use App\Topic;
use League\Fractal\TransformerAbstract;

class TopicTransformer extends TransformerAbstract
{
    public function transform(Topic $topic)
    {
        return [
            'id' => $topic->id,
            'category_id' => $topic->category_id,
            'category_name' => $topic->category_name,
            'title' => $topic->title,
            'keywords' => $topic->keywords,
            'description' => $topic->description,
            'instroduction' => $topic->instroduction,
            'download' => $topic->download,
            'created_at' => $topic->created_at->toDateTimeString(),
            'updated_at' => $topic->updated_at->toDateTimeString(),
        ];
    }
}