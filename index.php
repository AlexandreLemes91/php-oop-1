<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

    <?php 
    require_once __DIR__ . '/movie_data.php';
    require_once __DIR__ . '/movie_ob.php';
    ?>
    
    <div class="container">
        <h1>MOVIES</h1>

        <ul>
            <?php foreach( $movies as $movie ){
            $new_movie = new Movie( 
                $movie['title'],
                $movie['country'],
                $movie['release'] ); ?>
            <li><h4><?php echo $new_movie->title; ?></h4></li>
            <li><?php echo $new_movie->country; ?></li>
            <li><?php echo $new_movie->release_date; ?></li>
            <li><?php echo $new_movie-> setRate(); ?></li>
            <li><?php echo $new_movie->plot = $movie['plot'];?></li>
            <?php } ?>
        </ul>
    </div>



</body>
</html>