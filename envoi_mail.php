<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail de destination
    $to = "ounissinour13@gmail.com";

    // Sujet du e-mail
    $subject = "Nouveau message de contact de $name";

    // Corps du e-mail
    $body = "Nom: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Message:\n$message";

    // En-têtes du e-mail
    $headers = "From: $email";

    // Envoyer le e-mail
    $success = mail($to, $subject, $body, $headers);

    // Redirection après l'envoi du formulaire
    if ($success) {
        header("Location: contact.html?status=success");
    } else {
        header("Location: contact.html?status=error");
    }
} else {
    // Redirection si la page est accédée directement sans soumission de formulaire
    header("Location: contact.html");
}
?>
