<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
        $movies = [
            [
                'name' => 'Ghost',
                'releaseYear' => 1985,
            ],

            [
                'name' => "Pretty Women ",
                'releaseYear' => 1989,
            ],

            [
                'name' => 'war of the world',
                'releaseYear' => 2003,
            ],

            [
                'name' => 'king kong',
                'releaseYear' => 2014,
            ],
        ];


        function filterByRecent($movies)
        {
            $filteredMovies = [];

            foreach ($movies as $movie) {
                if ($movie['releaseYear'] >= 2000) {
                    $filteredMovies[] = $movie;
                }
            }

            return $filteredMovies;
        }
    ?>

    <ul>
        <?php foreach (filterByRecent($movies) as $movie) : ?>
            <li>
                <?= $movie['name'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>