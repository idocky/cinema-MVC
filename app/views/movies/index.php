
<div class="container back">
    <ul class="list-group">

            <?php

            foreach ($movies as $movie){
                echo '
                    <a class="nav-link text-dark" href="/movie/about/' . $movie['slug'] . '">
                        <li class="list-group-item d-flex justify-content-between align-items-center">' .
                    $movie["title"] . '<br/>' .
                            $movie['release_year'] . '
                            
                            <form action="/movie/delete" method="post">
                                <button  class="btn btn-danger" tabindex="-1"type="submit"
                                name="slug"  value = "' . $movie['slug'] . '" >Удалить</button>
                            </form>
                        </li>
                    </a>
                ';
            }
            ?>


    </ul>

</div>