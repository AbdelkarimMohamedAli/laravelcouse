<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatePost extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    private $post_id;
    private $user_create;  
    private $title_post;
    public function __construct($post_id,$user_create,$title_post)
    {
        //
        $this->post_id      =$post_id;
        $this->user_create  =$user_create;
        $this->title_post  =$title_post;
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
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
            'post_id'=>$this->post_id,
            'user_create'=>$this->user_create,
            'title_post'=>$this->title_post,
        ];
    }
}
