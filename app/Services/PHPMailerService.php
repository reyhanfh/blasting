<?php

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailerService
{
    protected $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->isSMTP();
        $this->mail->Host = 'smtp-relay.brevo.com'; // Ganti dengan host SMTP Anda
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'ariesxp@gmail.com'; // Ganti dengan email SMTP Anda
        $this->mail->Password = 'EDpqr1WHtsLmbvyJ'; // Ganti dengan password email SMTP Anda
        $this->mail->SMTPSecure = 'tls'; // atau 'ssl'
        $this->mail->Port = 587; // atau 465 untuk SSL
        $this->mail->setFrom('no-reply-booking@myhorison.com', 'Myhorison.com'); // Ganti dengan email dan nama pengirim
    }

    public function sendEmail($to, $subject, $body)
    {
        try {
            $this->mail->addAddress($to);
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
            $this->mail->AltBody = strip_tags($body);

            $this->mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
