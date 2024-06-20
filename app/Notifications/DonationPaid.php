<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DonationPaid extends Notification implements ShouldQueue
{
    use Queueable;
    private $data; // data to be sent to the notification

    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Example Notification')
            ->greeting('Hello!')
            ->line(jcms()->name)
            ->action('Notification Action', url('/'))
            ->line('Jazakumullah khoiron katsiron, semoga Allah Ta’ala memberikan keberkahan kepada para donatur atas donasi yang diberikan.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'data' => $this->data
        ];
    }
}
