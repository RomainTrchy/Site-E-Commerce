<!--Header du site-->
<?php include 'includes/header.php'; ?>

        <!--Contact-->
        <div class="gradient-div">
            <div class="box-container">
                <div class="contact-box">
                    <div class="left"></div>
                    <div class="right">
                        <h2 class="contactez">Contactez-nous !</h2>
                        <form action="remerciement.php" method="POST">
                            <input type="text" class="field" placeholder="Nom" name="nom" required>
                            <input type="text" class="field" placeholder="Prénom" name="prenom" required>
                            <input type="email" class="field" placeholder="Email" name="mail" required>
                            <input type="phone" class="field" placeholder="Téléphone" name="phone" required>
                            <textarea class="field area" placeholder="Votre message" name="message" required></textarea>
                            <button class="bouton-contact">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<!--Footer du site-->
<?php include 'includes/footer.php'; ?>