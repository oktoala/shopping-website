<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Categories</title>
</head>

<body>
    <?php include('../component/header.html'); ?>
    <main class="main container">
        <section class="section1 center">
            <?php
            $json_data = file_get_contents('https://fakestoreapi.com/products/categories');
            $response = json_decode($json_data);
            ?>
            <div class="categories">
                <?php foreach ($response as $category) : ?>
                    <?php ($isActive = ($_GET['category'] != $category) ? "" : "active") ?>
                    <div id="<?= $category ?>" class="category <?= $isActive ?>">
                        <a href="?category=<?= $category ?>">
                            <?= $category ?>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
            <?php if (!empty($_GET)) : ?>
                <?php
                $id = $_GET["category"];
                $json = file_get_contents("https://fakestoreapi.com/products/category/$id");
                $response_data = json_decode($json);
                ?>
                <div class='grid-container'>
                    <?php foreach ($response_data as $response) : ?>
                        <a href='/product?id=<?= $response->id ?>'>
                            <article id='<?= $response->id ?>' class='grid-item'>
                                <img class='grid-img' src='<?= $response->image ?>' />
                                <div class='grid-value'>
                                    <div class='grid-title'><?= $response->title ?></div>
                                    <div class='grid-price'>$<?= $response->price ?></div>
                                </div>
                            </article>
                        </a>
                    <?php endforeach ?>
                </div>
            <?php endif ?>


        </section>
    </main>
    <script>
        const nav = document.querySelector('li:nth-child(3) > a');
        nav.style.color = 'rgb(250, 217, 33)';
        nav.style.fontWeight = 'bold';
    </script>
</body>

</html>