<?php

namespace app\models;
use app\core\BaseModel as Model;
use app\core\Database;

class Movie extends Model

{
    //получаем все фильмы в алф порядке
    public function all()
    {
        $sql = "SELECT * FROM movies ORDER BY title ASC;";
        $stmt = $this->query($sql);

        return $stmt;
    }

    //находим фильм по слагу
    public function find($slug)
    {
        $sql = 'select * from movies where slug = "'. $slug . '"';
        $res = $this->query($sql);
        foreach ($res as $r)
        {
            $res = $r;
        }

        return $res;
    }

    //добавляем новый фильм
    public static function add($request)
    {
        require_once 'app/core/sluginator.php';

        $movie = new static;

        $slug = sluginator($request['title']);


        $sql = "insert into movies (title, slug, release_year, format, actors)
                values ('" . $request['title'] . "', '" . $slug . "', '" . $request['release_year'] . "', '" . $request['format'] . "', '" . $request['actors'] ."')";

        $movie->execute($sql);
    }

    //удаляем фильм
    public function remove($slug)
    {
        $this->execute('delete from movies where slug = "' . $slug . '"');
    }


}