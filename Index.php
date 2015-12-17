<?php
include("include/head.php");
include("include/nav.php");
?>

    <body>
        <div class="container">

            <?php
        include("include/connect.php");
                    $reponse = $bdd->query('SELECT * FROM movie');
                    while ($donnees = $reponse->fetch())
                    { ?>

                <div>
                    <a href="Le%20loup.php"><h2><?php echo $donnees['mov_name'];?></h2></a>
                    <p>
                        <?php echo $donnees['mov_description_short'];?>
                    </p>
                </div>

                <?php }
                        $reponse->closeCursor();
                ?>

                    <?php include ("include/footer.php"); ?>
        </div>
    </body>