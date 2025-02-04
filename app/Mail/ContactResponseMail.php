<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactResponseMail extends Mailable
{
    use Queueable, SerializesModels;
    public $message; // El mensaje original
    public $responseMessage; // La respuesta del administrador

    /**
     * Create a new message instance.
     */
    public function __construct($message, $responseMessage)
    {
        $this->message = $message; // Modelo Message de la base de datos
        $this->responseMessage = $responseMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Respuesta a tu mensaje',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.response_message', // Asegúrate de que la vista esté correcta
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }

    public function build()
    {


        return $this->subject('Respuesta a tu mensaje')
            ->view('emails.response_message') // Aquí se pasa la vista para mostrar el contenido
            ->with([

                'mensaje' => $this->message, // El modelo Message
                'responseMessage' => $this->responseMessage, // La respuesta del administrador
            ]);
    }
}
