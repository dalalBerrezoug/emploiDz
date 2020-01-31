<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Condidat;
use App\Postule;
use App\Offre;


class NewOffrePostuler extends Notification
{
    use Queueable;
    protected $condidat;
    protected $pos;
    protected $offre;
    

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Postule $pos,Condidat $condidat,Offre $offre)
    {
        //
        $this->condidat = $condidat;
        $this->pos = $pos;
        $this->offre = $offre;

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
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
            'idoffre' => $this->pos->offre_id,
            'condidat' => $this->condidat->id,
                'nom' => $this->condidat->nom,
            'prenom' => $this->condidat->prenom,
           // 'condidatp' => $this->condidat->id,
            //'r' => $this->condidat->nom,
            //'re' => $this->condidat->prenom,
            'offre' => $this->offre->nom,


        ];
    }
}
