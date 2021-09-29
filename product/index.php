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
            <div class="grid-container">
                <?php
                if (!empty($_GET)) {
                    print_r($_GET);
                } else {
                    $json_data = file_get_contents('https://fakestoreapi.com/products');
                    $response_data = json_decode($json_data);
                    // print_r($response_data[0]->id);

                    foreach ($response_data as $response) {
                        echo "<a href='?id=$response->id'>";
                        echo "<article id='$response->id' class='grid-item'>";
                        echo "<img class='grid-img' src='$response->image' />";
                        echo  "<div class='grid-value'>";
                        echo "<div class='grid-title'>$response->title</div>";
                        echo "<div class='grid-price'>\$$response->price</div>";
                        echo  "</div>";
                        echo "</article>";
                        echo "</a>";
                    }
                }
                ?>

            </div>
        </section>
    </main>
    <script>
        document.querySelector('li:nth-child(2) > a').style.color = 'rgb(250, 217, 33)';
    </script>
</body>