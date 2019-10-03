<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Trips;
use App\User;
class RatingNotify extends Notification
{
    use Queueable;
    public  $trips;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Trips $trips)
    {
        $this->trips=$trips;
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
           'user_id'=>$this->trips->user_id,
            'user_name'=>$user->name,
            'loc2'=>$this->trips->loc2,
            'stime'=>$this->trips->stime,
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
        $user=User::find($this->trips->user_id);
        return [
            'user_id'=>$this->trips->user_id,
            'user_name'=>$user->name,
            'loc2'=>$this->trips->loc2,
            'stime'=>$this->trips->stime,
        ];
    }
}
