<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SavePost extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $id_post;
    public $nombre_post;
    public $usuario_id;

    public function __construct($id_post, $nombre_post, $usuario_id)
    {
        $this->id_post = $id_post;
        $this->nombre_post = $nombre_post;
        $this->usuario_id = $usuario_id;
    }
    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = url('/notificaciones');
        return (new MailMessage)
            ->line('Has recibido un nuevo guardado en tu post.')
            ->line('El post es: ' . $this->nombre_post)
            ->action('Ver Notificaciones', $url)
            ->line('Gracias por utilizar OfertasJB!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
            'id_post' => $this->id_post,
            'nombre_post' => $this->nombre_post,
            'usuario_id' => $this->usuario_id,
        ];
    }
}
