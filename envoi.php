<?php
// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Envoi du message par email (exemple)
    $to = "votre-email@example.com";
    $subject = "Nouveau message de $nom";
    $body = "Nom: $nom\nEmail: $email\nMessage:\n$message";

    // Envoyer l'email
    if (mail($to, $subject, $body)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>

