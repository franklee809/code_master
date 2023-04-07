<?php

class Book {
    public function __construct(
        public readonly string $title,
        public readonly string $author,
        public readonly string $pages = '231'){
    }
}

$book1 = new Book('PHP for Cats', 'Larry Truett', '300');
var_dump($book1);
var_dump($book1->title);

var_dump($book1->title);