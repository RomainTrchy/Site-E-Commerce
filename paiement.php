<!--Header du site-->
<?php include 'includes/header.php'; ?>

        <!-- Affichage du choix du mode de paiement-->
        <fieldset class="modepaiement">
            <legend>Mode de paiement sécurisés</legend>
            <div class="cartes">
                <input type="radio" name="credit" id="credit">
                <label for="credit">Carte de crédit</label>
            </div>
            <div class="cartes">
                <input type="radio" name="ligne" id="ligne">
                <label for="ligne">Opérations bancaires en ligne</label>
            </div>
            <div class="cartes">
                <input type="radio" name="virement" id="virement">
                <label for="virement">Virement bancaires</label>
            </div>
            <div class="cartes">
                <input type="radio" name="paypal" id="paypal">
                <label for="paypal">PayPal</label>
            </div>
        </fieldset>

        <!-- Affichage du choix de l'adresse de livraison-->
        <fieldset class="facture">
            <legend>Choisissez votre mode de livraison</legend>
            <div class="mmfacture">
                <input type="radio" name="factureID" id="mm">
                <label for="mm">Identique à l'adresse de livraison</label>
            </div>
            <div class="difffacture">
                <input type="radio" name="factureID" id="diff">
                <label for="diff">Utiliser une autre adresse de facturation</label>
            </div>
        </fieldset>

        <!-- Affichage de la commande à afficher sur la droite de l'écran-->
        <div class="particle">
            <h3>Récapitulatif de la commande</h3></br>
            <p>N° de réference 2116259075440</p>
            <a href="#">Code promotionnel</a>
            <hr>
            
            <div class="small-container single-product">
                <div class="row">
                    <div class="col-2">
                    <a href="product-details.php"><img src="images/iphone-13.png"></a>
                    </div>
                    <div class="col-2">
                        <h1>Iphone 13 d'Apple</h1>
                        <h4>989,00€</h4>
                    </div>
                </div>
            </div>

            <hr>

            <!--type de livraison = côut-->
            <p><strong>Total</strong></p>
            <p><strong>989,00€</strong></p>
        </div>
    </body>
</html>