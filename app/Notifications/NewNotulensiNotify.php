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
    protected $agenda;
    public function __construct($nama, $files, $agenda)
    {
        $this->nama = $nama;
        $this->files = $files;
        $this->agenda = $agenda;

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
        ->subject($this->nama. 
        ', Notulensi dari acara yang kamu ikuti sudah ada!')
        ->greeting('Notulensi Rapat ' . $this->agenda . ' Telah dikirim')
        // ->line('Notulensi Acara Telah Dikirim!')
        ->line('Lihat hasil Notulensi dengan klik Button dibawah ini!') //Send with post title
        ->action('Klik untuk Download File' , url($this->files)) //Send with post url
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
