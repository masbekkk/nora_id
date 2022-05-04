<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewNotulensiNotify extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $nama;
    protected $files;
    public function __construct($nama, $files)
    {
        $this->nama = $nama;
        $this->files = $files;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->subject('Hey Romusha PENS ' .$this->nama. ', Notulensi dari acara yang kamu ikuti sudah ada!')
        ->greeting('Hello, ini ntar nama acaranya' )
        ->line('Notulensi Acara Telah Dikirim!')
        ->line('Silahkan Bisa dilihat ya! ') //Send with post title
        ->action('Klik untuk Melihat File' , url($this->files)) //Send with post url
        ->line('Thank you for support us!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
