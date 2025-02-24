<?php

namespace App\Mail;

use App\Models\Blog;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BlogPublishedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $blog;


    /**
     * Create a new message instance.
     */
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $email = $this->subject('Nuevo Post Publicado: ' . $this->blog->titulo)
            ->view('emails.blog_published');

        return $email;
    }
}
