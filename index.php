<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Shopping</title>
    <style>
        /* Home */

        .wrap {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button {
            --mainColour: #8506da;
            min-width: 300px;
            min-height: 60px;
            font-size: 22px;
            text-transform: uppercase;
            letter-spacing: 1.3px;
            font-weight: 700;
            color: #fefefe;
            background: var(--mainColour);
            background: linear-gradient(90deg, rgba(108, 1, 192, 1) 0%, rgba(133, 6, 218, 1));
            border: none;
            border-radius: 1000px;
            box-shadow: 12px 12px 24px rgba(133, 6, 218, .64);
            transition: all 0.3s ease-in-out 0s;
            cursor: pointer;
            outline: none;
            position: relative;
            padding: 10px;
        }

        button::before {
            content: '';
            border-radius: 1000px;
            min-width: calc(300px + 12px);
            min-height: calc(60px + 12px);
            border: 6px solid #A031FC;
            box-shadow: 0 0 60px rgba(160, 49, 252, .64);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: all .3s ease-in-out 0s;
        }

        .button:hover,
        .button:focus {
            color: #fefefe;
            transform: translateY(-6px);
        }

        button:hover::before,
        button:focus::before {
            opacity: 1;
        }

        button::after {
            content: '';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 6px solid #A031FC;
            position: absolute;
            z-index: -1;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: ring 1.5s infinite;
        }

        button:hover::after,
        button:focus::after {
            animation: none;
            display: none;
        }

        @keyframes ring {
            0% {
                width: 30px;
                height: 30px;
                opacity: 1;
            }

            100% {
                width: 300px;
                height: 300px;
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <?php include 'component/header.html'; ?>
    <main class="main container">
        <section class="section1 center">
            <div class="wrap">
                <a href="product/">
                    <button class="button">Start Shopping!</button>
                </a>
            </div>
        </section>
    </main>
    <script>
        const nav = document.querySelector('li:nth-child(1) > a');
        nav.style.color = 'rgb(250, 217, 33)';
        nav.style.fontWeight = 'bold';
    </script>
</body>

</html>