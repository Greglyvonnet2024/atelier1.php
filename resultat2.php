<?php
var_dump($_GET);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Srisakdi">



    <title>Au poids Gourmand</title>

</head>

<body>


    <main>

        <div class="page1">

            <div class="tete">

                <div class="logo">
                    <i class="fa-solid fa-bowl-food fa-2xl" style="color: #6b9986;"></i>
                    <h1>Au poids Gourmand</h1>
                </div>

            </div>

            <div class="commande">

                <div class="formule">

                    <h2>Merci pour votre commande !</h2>


                    <img src="./assets/img/<?php echo $_GET['img'] ?>" alt="plat">

                    <div class="part1">
                        <h4>Votre formule <?php echo $_GET['menu']; ?> arrive dans quelques instant...</h4>

                        <i class="fa-solid fa-bowl-food fa-2xl" style="color: #6b9986;"></i>

                    </div>
                    
                    <p>Nous vous souhaitons une bonne dégustation.<br>
                        Un café gourmand vous est proposé pour terminer votre pause gourmande en douceur.
                    </p>


                    <div class="facture">

                        <p>- Votre facture sera de ... €</p>
                        <a href="index.php">Choisir un autre menu</a>

                    </div>



                </div>


                <div class="note">
                    <p> Vous avez aimé ?</p>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                    <img src="./assets/img/pg.jpg" alt="poids">

                </div>


                <div class="fin-page">
                    <i class="fa-solid fa-bowl-food fa-2xl" style="color: #6b9986;"></i>
                    <p>.....</p>
                    <i class="fa-solid fa-bowl-food fa-2xl" style="color: #6b9986;"></i>
                    <p>....</p>
                    <i class="fa-solid fa-bowl-food fa-2xl" style="color: #6b9986;"></i>
                    <p>...</p>
                    <i class="fa-solid fa-bowl-food fa-2xl" style="color: #6b9986;"></i>
                    <p>..</p>
                    <i class="fa-solid fa-bowl-food fa-2xl" style="color: #6b9986;"></i>
                    <p>.</p>

                    <h3>Au poids Gourmand</h3>

                </div>
            </div>

    </main>


</body>

</html>