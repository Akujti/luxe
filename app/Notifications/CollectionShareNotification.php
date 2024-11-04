<?php

namespace App\Notifications;

use App\Models\Collection;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CollectionShareNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $collection;
    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hello!')
            ->line('You have been invited to view a collection of properties.')
            ->action('View Collection', url('/collections/' . $this->collection->id))
            ->line('Click the button above to see the properties in this collection.')
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
