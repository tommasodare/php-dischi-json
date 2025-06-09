<?php

$json_text = file_get_contents('dischi.json');
$albums = json_decode($json_text, true);

/* var_dump($albums); */


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center p-3">Albums</h1>

    <container class="fluid d-flex flex-wrap justify-content-center gap-4 my-4">

        <?php

        foreach ($albums as $album) {

        ?>

            <div class="card" style="width: 18rem;">
                <img src="<?php echo $album['coverUrl'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titolo: <?php echo $album['titolo'] ?></h5>
                    <p class="card-text">Artista: <?php echo $album['artista'] ?></p>
                    <p class="card-text">Anno: <?php echo $album['anno'] ?></p>
                    <p class="card-text">Genere: <?php echo $album['genere'] ?></p>

                </div>
            </div>

        <?php } ?>


    </container>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>