<?php
class News
{
    public static function getNewsItemById($id)
    {
        $id = intval($id);
        if ($id) {
            // $host = 'localhost';
            // $dbname = 'test';
            // $user = 'root';
            // $password = '';
            // $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
           
            
            $db = Db::getConnection();
            $result = $db->query('SELECT * from news WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $newsItem = $result->fetch();
            return $newsItem;
        }
    }
    public static function getNewsList()
    {
        // $host = 'localhost';
        // $dbname = 'test';
        // $user = 'root';
        // $password = '';
        // $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

        $db = Db::getConnection();

        $newsList = array();
        $result = $db->query('SELECT id, h1, date, short_content ' . 'FROM news ' . 'ORDER BY date DESC ' . 'LIMIT 10');

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['h1'] = $row['h1'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newsList;
    }
}
