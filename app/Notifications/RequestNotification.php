<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RequestNotification extends Notification
{
    use Queueable;

    private $request;
    private $car;

    /**
     * Create a new notification instance.
     */
    public function __construct($request, $car)
    {
        $this->request = $request;
        $this->car = $car;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Pedido de contacto')
            ->line($this->car['brand']['name'] . ' ' . $this->car['car_model']['name'])
            ->line('Nome: ' . $this->request->name)
            ->line('Email: ' . $this->request->email)
            ->line('Contacto: ' . $this->request->phone)
            ->line('Assunto: ' . $this->request->subject)
            ->line('Mensagem: ' . $this->request->message);
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
        ];
    }
}