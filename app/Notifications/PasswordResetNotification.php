<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordResetNotification extends Notification
{
    use Queueable;

    protected $verificationCode;

    public function __construct($verificationCode)
    {
        $this->verificationCode = $verificationCode;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Salut ' . $notifiable->firstname . '!')
            ->line('Vous avez reçu cet e-mail car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.')
            ->line('**Votre code de vérification est : ' . $this->verificationCode . '**')
            ->line("Si vous n'avez pas demandé cette réinitialisation, aucune autre action n'est requise.")
            ->salutation('Cordialement, eRequest');
    }
    
    
}
