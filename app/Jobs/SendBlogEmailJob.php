<?php

namespace App\Jobs;

use App\Mail\BlogPublishedMail;
use App\Models\Blog;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendBlogEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $blog;
    protected $email;

    /**
     * Create a new job instance.
     */
    public function __construct(Blog $blog, $email)
    {
        $this->blog = $blog;
        $this->email = $email;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->email)->send(new BlogPublishedMail($this->blog, $this->email));
    }
}
