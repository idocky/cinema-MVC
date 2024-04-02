<?php

namespace app\controllers;

use app\core\BaseView;
use app\core\Request;
use app\models\Movie;
use app\core\BaseController;


class MovieController extends BaseController
{
    private $movieModel;

    function __construct()
    {
        $this->view = new BaseView();
        $this->movieModel = new Movie();

    }

    public function index()
    {
        $movies = $this->movieModel->all();

        $this->view->generate('movies/index.php', 'layout.php', ['movies' => $movies]);
    }

    public function create()
    {

        $this->view->generate('movies/create.php', 'layout.php', [] );
    }

    public function store()
    {
        Movie::add(Request::getPostParam());

        $this->view->redirect();
    }


    public function delete()
    {

        $this->movieModel->remove(Request::getPostParam()['slug']);

        $this->view->redirect();
    }

    public function about($slug)
    {
        $movie = $this->movieModel->find($slug);

        $this->view->generate('movies/about.php', 'layout.php', ['film' => $movie] );
    }

    public function parsePage()
    {
        $this->view->generate('movies/parse_file.php', 'layout.php', [] );
    }

    public function parseMovies()
    {
        if(isset($_FILES['file'])) {
            $file = $_FILES['file'];

            // Проверяем, не произошла ли ошибка при загрузке файла
            if($file['error'] === UPLOAD_ERR_OK) {

                $content = file_get_contents($file['tmp_name']);


                $lines = explode("\n", $content);


                $movies = [];

                foreach($lines as $line) {
                    $parts = explode(": ", $line);


                    if(count($parts) === 2) {
                        $key = trim($parts[0]);
                        $value = trim($parts[1]);


                        $movies[$key] = $value;
                    } elseif(empty(trim($line))) {
                        if(!empty($movies)) {
                            $allMovies[] = $movies;
                            $movies = [];
                        }
                    }
                }


                if(!empty($movies)) {
                    $allMovies[] = $movies;
                }
                foreach($allMovies as $movie) {
                    if(!isset($movie['Title'])){
                        continue;
                    }
                    Movie::add([
                        'title' => $movie['Title'],
                        'release_year' => $movie['Release Year'],
                        'format' => $movie['Format'],
                        'actors' => $movie['Stars']
                    ]);
                }

            } else {
                echo "Ошибка при загрузке файла";
            }
        }


        $this->view->redirect();
    }
}


