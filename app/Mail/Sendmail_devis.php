<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail_devis extends Mailable
{
    use Queueable, SerializesModels;

    public $personne_devis;
    public $domaine_devis;
    public $numero_devis;
    public $pays_devis;
    public $ville_devis;
    public $adresse_devis;
    public $nom_devis;
    public $numeroc_devis;
    public $emailc_devis;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($personne_devis, $domaine_devis, $numero_devis, $pays_devis, $ville_devis,$adresse_devis,$nom_devis,$numeroc_devis,$emailc_devis,$subject)
    {
       
        $this->subject = $subject;
        $this->personne_devis = $personne_devis;
        $this->domaine_devis = $domaine_devis;
        $this->numero_devis = $numero_devis;
        $this->pays_devis = $pays_devis;
        $this->ville_devis = $ville_devis;
        $this->adresse_devis = $adresse_devis;
        $this->nom_devis = $nom_devis;
        $this->numeroc_devis = $numeroc_devis;
        $this->emailc_devis = $emailc_devis;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
                    ->view('emails.sendmail_devis');
    }
}
