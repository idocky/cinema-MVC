<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Данные о фильме
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Название:</strong> <?= $film['title']; ?></li>
                        <li class="list-group-item"><strong>Год выпуска:</strong> <?= $film['release_year']; ?></li>
                        <li class="list-group-item"><strong>Формат:</strong> <?= $film['format']; ?></li>
                        <li class="list-group-item"><strong>Актеры:</strong> <?= $film['actors']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
