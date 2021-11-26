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

<div class="small-container thanks-page">
    <div class="thanks-name">
        <h1>Merci <?php echo("$prenom $nom");?></h1>
        <h2>Votre message a bien été reçu !</h2>
    </div>
        <br>
    <div class="thanks-news">
        <h3>Voulez-vous obtenir toutes les dernières informations de PhoneSwap ?</h3>
        <h4>Si cela est le cas, nous vous les transmettrons via cet email :</h4>
        <h5><?php echo($mail);?></h5>
    </div>
</div>

<!--Footer du site-->
<?php include 'includes/footer.php'; ?>