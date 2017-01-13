<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article
    extends Model
{

    public static $table = 'news';

    public $title;
    public $text;

    public static function lastNews(int $num)
    {
        $db = new Db();
        $sql = 'SELECT * FROM news ORDER BY id DESC LIMIT ' . $num;
        return $db->query($sql, [], self::class);
    }

}