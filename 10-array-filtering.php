<?php

class Post
{
    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }

}

$posts = [
    new Post('My first post', true),
    new Post('My second post', true),
    new Post('My third post', true),
    new Post('My fourth post', false)
];

//$unpublishedPosts = array_filter($posts, function ($post) {
//    return !$post->published;
//});

//var_dump($unpublishedPosts);

//$modified = array_map(function($post){
//    // only subset of data
//    return ['title' => $post->title];
//    //    $post->published = true;
//    //    return $post;
//}, $posts);
//
//var_dump($modified);

//$titles = array_map(function($post){
//    return $post->title;
//}, $posts);
//
//var_dump($titles);

//$titles = array_column($posts, 'title');
//$titles = array_column($posts, 'title', 'published');
//var_dump($titles);

$posts = array_map(function ($post){
    return (array) $post;
}, $posts);
