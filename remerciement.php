<!--Header du site-->
<?php include 'includes/header.php'; ?>

<?php 
// Définir les variables
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];
?>

<div class="small-container">
    <div class="row">
        <div class="merci">
                <h1 id="merci-nom">Merci <?php echo("$prenom $nom"); ?></h1>
                <h2 class="merci-message">Votre message a bien été reçu !</h2>
                <h3 class="merci-news">Voulez-vous obtenir toutes les dernières informations de PhoneSwap ?</h3>
                <h4 class="merci-news">Si cela est le cas, nous vous les transmettrons via cet email :</h4>
                <h5 class="merci-news"><?php echo($mail); ?></h5>
        </div>
    </div>
</div>

<!--Footer du site-->
<?php include 'includes/footer.php'; ?>