<?php

namespace App\Mail;

use App\Models\Menu;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    private $items;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $items)
    {
        $this->data = $data;
        $this->items = $items;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Ваш заказ обрабатывается !',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.order', with:['data' => $this->data, 'items' => $this->items],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
