<?php

class Comment
{
    public $post_id;
    public $comment_autore;
    public $comment_email;
    public $comment_contenuto;
    public $comment_data_creazione;

    public function __construct($post_id, $comment_autore, $comment_email, $comment_contenuto, $comment_data_creazione)
    {
    $this->post_id = $post_id;
    $this->comment_autore = $comment_autore;
    $this->comment_email = $comment_email;
    $this->comment_contenuto = $comment_contenuto;
    $this->comment_data_creazione = $comment_data_creazione;
    }
}

