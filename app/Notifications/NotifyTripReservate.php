<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Reservate;
use App\User;
class NotifyTripReservate extends Notification
{
    use Queueable;
    public  $reservate;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Reservate $reservate)
    {
        $this->reservate=$reservate;
}
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $user=User::find($this->reservate->user_id);
        return [
             'user_id'=>$this->reservate->user_id,
           'user_name'=> $user->name,
            'trip_id'=>$this->reservate->trip_id,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $user=User::find($this->reservate->user_id);
        return [
            'user_id'=>$this->reservate->user_id,
           'user_name'=> $user->name,
           'trip_id'=>$this->reservate->trip_id,
           
        ];
    }
}
