<?php
require '../core/functions.php';

class Post
{
    public $published;
    
    public $title;

    public  function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('Some title 01', true),
    new Post('Some title 02', false),
    new Post('Some title 03', true),
    new Post('Some title 04', true)
];

$unpublishedPosts = array_filter($posts, function($post){
    return !$post->published;
});

$modified = array_map(function($post){
    return  ['title', $post->title];
}, $posts);

$titles = array_column($posts, 'title', 'published');

dd($titles);