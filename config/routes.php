<?php
return array(
    'news/([0-9]+)' => 'news/view/$1',
    // 'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',  
    'news' => 'news/index',         //actionIndex v NewsController
    'products' => 'product/list',   //actionList v ProductController

);
