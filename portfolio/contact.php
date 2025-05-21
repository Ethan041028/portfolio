<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "votre-email@example.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de contact";
    $body = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["success" => true, "message" => "Message envoyé avec succès."]);
    } else {
        echo json_encode(["success" => false, "message" => "Erreur lors de l'envoi du message."]);
    }
}
?>