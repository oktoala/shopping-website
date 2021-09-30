<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Product</title>
</head>

<body>
    <?php include '../component/header.html'; ?>
    <main class="main container">
        <section class="section1 center">
            <?php if (!empty($_GET)) : ?>
                <?php
                $id = $_GET["id"];
                $json_data = file_get_contents("https://fakestoreapi.com/products/$id");
                $response_data = json_decode($json_data);
                $discount = 15 / 100;
                $real_price =  number_format($response_data->price / (1 - $discount), 2);
                ?>
                <div class='product'>
                    <img src='<?= $response_data->image ?>' />
                    <div class="product-item">
                        <div class='product-desc'>
                            <div class='product-title'>
                                <?= $response_data->title ?>
                            </div>
                            <div class='product-price'>
                                <div class="real-price">
                                    $<?= $real_price ?>
                                </div>
                                <div class="discount-price">
                                    $<?= $response_data->price ?>
                                </div>
                                <div class="discount-value">15% OFF</div>
                            </div>
                            <div class="product-description">
                                <h3>Description:</h3>
                                <p><?= $response_data->description ?></p>
                            </div>
                        </div>
                        <button onclick="alert('😃')" class="product-cart">
                            <?php include('../icon/add_shopping_cart.svg') ?>
                            <span>
                                Add to Cart
                            </span>
                        </button>
                    </div>
                </div>
            <?php else : ?>
                <?php
                $json_data = file_get_contents('https://fakestoreapi.com/products');
                $response_data = json_decode($json_data);
                ?>
                <div class='grid-container'>
                    <?php foreach ($response_data as $response) : ?>
                        <a href='?id=<?= $response->id ?>'>
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
        const nav = document.querySelector('li:nth-child(2) > a');
        nav.style.color = 'rgb(250, 217, 33)';
        nav.style.fontWeight = 'bold';
    </script>
</body>