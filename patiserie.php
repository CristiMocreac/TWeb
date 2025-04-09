<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ograda Cafè</title>
        <link rel="stylesheet" href="css\patiserie.css">
    </head>
    <body>
        <div id="navbar-container"></div>
        <script src="js\navbar.js"></script>
            
        
            <script src="js\cafea.js"></script>

            <h2 class="nume">KEKS</h2>
            <main class="patiserie">
            <!-- <div class="menu-item">
                <img src="images\patiserie\ChCaramela.jpg" alt="ChCaramela" class="menu-image" width="200">
                <h3>Cheesecake Caramelă</h3>
                <p>90 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\ChFistic.jpg" alt="ChFistic" class="menu-image" width="200">
                <h3>Cheesecake Fistic</h3>
                <p>90 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\ChBanana.jpg" alt="ChBanana" class="menu-image" width="200">
                <h3>Cheesecake Banană</h3>
                <p>90 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\ChDovleac.jpg" alt="ChDovleac" class="menu-image" width="200">
                <h3>Cheesecake Dovleac și Portocală</h3>
                <p>75 MDL</p>
            </div> -->

            <div class="menu-item">
                <div class="flip-container" onclick="toggleFlip(this)">
                    <div class="flipper">
                        <div class="front">
                            <img src="images\patiserie\Ecler.jpg" alt="Ecler" class="menu-image" width="200" id="ecler">
                        </div>
                        <div class="back">
                            <div class="ecler-list">
                                <p>Fistic</p>
                                <p>Pomușoare</p>
                                <p>Ciocolată</p>
                                <p>Halva</p>
                                <p>Caramelă</p>
                                <p>Cocos</p>
                            </div>
                        </div>
                    </div>
                    <h3>Eclere</h3>
                    <p>48 MDL</p>
                </div>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\CosuletFructe.jpg" alt="CosuletFructe" class="menu-image" width="200">
                <h3>Coșuleț Fructe</h3>
                <p>54 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\CosuletMascarpone.jpg" alt="CosuletMascarpone" class="menu-image" width="200">
                <h3>Coșuleț Mascarpone</h3>
                <p>66 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\CosuletLamaie.jpg" alt="CosuletLamaie" class="menu-image" width="200">
                <h3>Coșuleț Lămâie</h3>
                <p>72 MDL</p>
            </div>

            <!-- <div class="menu-item">
                <img src="images\patiserie\MousseFructulPasiunii.jpg" alt="MousseFructulPasiunii" class="menu-image" width="200">
                <h3>Mousse Fructul Pasiunii</h3>
                <p>90 MDL</p>
            </div> -->

            <div class="menu-item">
                <img src="images\patiserie\MousseFisticMere.jpg" alt="MousseFisticMere" class="menu-image" width="200">
                <h3>Mousse Fistic/Mere</h3>
                <p>90 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\MoussePomusoare.jpg" alt="MoussePomusoare" class="menu-image" width="200">
                <h3>Mousse Pomușoare</h3>
                <p>90 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\MousseCocos.jpg" alt="MousseCocos" class="menu-image" width="200">
                <h3>Mousse Cocos</h3>
                <p>70 MDL</p>
            </div>

            <!-- <div class="menu-item">
                <img src="images\patiserie\MousseInima.jpg" alt="MousseInima" class="menu-image" width="200">
                <h3>Mousse Inimă</h3>
                <p>66 MDL</p>
            </div> -->

            <div class="menu-item">
                <img src="images\patiserie\BabaNeagra.jpg" alt="BabaNeagra" class="menu-image" width="200">
                <h3>Babă Neagră</h3>
                <p>45 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\Napoleon.jpg" alt="Napoleon" class="menu-image" width="200">
                <h3>Napoleon</h3>
                <p>54 MDL</p>
            </div>

            <!-- <div class="menu-item">
                <img src="images\patiserie\NapoleonCioc.jpg" alt="NapoleonCioc" class="menu-image" width="200">
                <h3>Napoleon cioc.</h3>
                <p>60 MDL</p>
            </div> -->

            <div class="menu-item">
                <img src="images\patiserie\Brownie.jpg" alt="Brownie" class="menu-image" width="200">
                <h3>Brownie</h3>
                <p>55 MDL</p>
            </div>

            <!-- <div class="menu-item">
                <img src="images\patiserie\Medovic.jpg" alt="Medovic" class="menu-image" width="200">
                <h3>Medovic</h3>
                <p>45 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\Smantanel.jpg" alt="Smantanel" class="menu-image" width="200">
                <h3>Smântânel</h3>
                <p>45 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\TortaMac.jpg" alt="TortaMac" class="menu-image" width="200">
                <h3>Tortă cu Mac</h3>
                <p>67 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\Celebru.jpg" alt="Celebru" class="menu-image" width="200">
                <h3>Celebru</h3>
                <p>72 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\CarrotCake.jpg" alt="CarrotCake" class="menu-image" width="200">
                <h3>Carrot Cake</h3>
                <p>60 MDL</p>
            </div> -->

            <div class="menu-item">
                <img src="images\patiserie\Nuci.jpg" alt="Nuci" class="menu-image" width="200">
                <h3>Nucușoare</h3>
                <p>5 MDL</p>
            </div>
            </main>


        <h2 class="nume">Ice Dessert</h2>
        <main class="patiserie">
            <div class="menu-item">
                <img src="images\patiserie\Macarons.jpg" alt="Macarons" class="menu-image" width="200">
                <h3>Macarons</h3>
                <p>40 MDL</p>
            </div>
            
            <!-- <div class="menu-item">
                <img src="images\patiserie\Snikers.jpg" alt="Snikers" class="menu-image" width="200">
                <h3>Snikers</h3>
                <p>75 MDL</p>
            </div> -->
            
            <div class="menu-item">
                <img src="images\patiserie\Napoleon.jpg" alt="Napoleon" class="menu-image" width="200">
                <h3>Napoleon</h3>
                <p>63 MDL</p>
            </div>
            
            <div class="menu-item">
                <img src="images\patiserie\Vafelinii.jpg" alt="Vafelinîi" class="menu-image" width="200">
                <h3>Vafelinîi</h3>
                <p>60 MDL</p>
            </div>
            
            <div class="menu-item">
                <img src="images\patiserie\Kievskii.jpg" alt="Kievskii" class="menu-image" width="200">
                <h3>Kievskii</h3>
                <p>85 MDL</p>
            </div>
            
            <!-- <div class="menu-item">
                <img src="images\patiserie\BlackForest.jpg" alt="Black Forest" class="menu-image" width="200">
                <h3>Black Forest</h3>
                <p>90 MDL</p>
            </div>
            
            <div class="menu-item">
                <img src="images\patiserie\CherryCake.jpg" alt="Cherry Cake" class="menu-image" width="200">
                <h3>Cherry Cake</h3>
                <p>75 MDL</p>
            </div> -->
            
            <div class="menu-item">
                <img src="images\patiserie\RedVelvet.jpg" alt="Red Velvet" class="menu-image" width="200">
                <h3>Red Velvet</h3>
                <p>90 MDL</p>
            </div>
        </main>

        <h2 class="nume">Bone</h2>
        <main class="patiserie1">
            <div class="menu-item">
                <img src="images\patiserie\Alunel.jpg" alt="Alunel" class="menu-image" width="200">
                <h3>Alunel</h3>
                <p>50 MDL</p>
            </div>

            <div class="menu-item">
                <img src="images\patiserie\RedV.jpg" alt="RedV" class="menu-image" width="200">
                <h3>Red Velvet</h3>
                <p>50 MDL</p>

            </div>

            <div class="menu-item">
                <img src="images\patiserie\Shu.jpg" alt="Shu" class="menu-image" width="200">
                <h3>Shu</h3>
                <p>50 MDL</p>

            </div>     
        </main>
    </div>

    <div id="footer-container"></div>
    <script src="js/footer.js"></script>

    </body>
    </html>