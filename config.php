<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => '',
    'description' => 'Website description.',
    'collections' => [],
    'siteName' => 'pritchard.co',
    'getTitle' => function ($page) {
        if ($page->getPath() == '') {
            return $page->siteName . " | " . $page->description;
        }
        return $page->title == '' ? 'pritchard.co' : $page->title . " | " . $page->siteName;
    }
];
