<?php

include_once ROOT . '/models/News.php';

class NewsController
{
    public function actionIndex()
    {
        $newList = array();
        $newList = News::getNewsList();
        require_once(ROOT . '/views/news/index.php');
        // echo '<pre>' . print_r($newList, true) . '</pre>';
        // echo 'Список новостей NewsController actionIndex';
        return true;
    }
    public function actionView($id)
    {
        if ($id) {
            $newsItem = News::getNewsItemById($id);
            require_once(ROOT . '/views/news/view.php');
            // echo '<pre>' . print_r($newsItem, true) . '</pre>';
            // echo 'Одна новость';
            return true;
        }
        echo 'Одна новость NewsController actionView';
    }
}
