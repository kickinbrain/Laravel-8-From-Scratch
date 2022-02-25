<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\DocBlock\Tags\Throws;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $expert;
    public $date;
    public $body;
    public $slug;


    public function __construct($title, $expert, $date, $body, $slug)
    {
        $this->title = $title;
        $this->expert = $expert;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function find($slug)
    {
       return static::all()->firstWhere('slug', $slug);
    }

    public static function findOrFail($slug)
    {
        $post = static::find($slug);
 
        if(! $post){
            throw new ModelNotFoundException();
        }
        return $post;
    }

    public static function all()
    {
        return cache()->rememberForever('posts.all', function (){
            return collect(File::files(resource_path("posts/")))
                ->map(function ($file){
                    return YamlFrontMatter::parseFile($file);
                })
                ->map(function ($document){

                    return new Post(
                        $document->title,
                        $document->expert,
                        $document->date,
                        $document->body(),
                        $document->slug
                    );
                })->sortBy('date');
        });

    }
}
