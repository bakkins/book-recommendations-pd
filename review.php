<?php

class Review {
    private string $full_name;
    private string $book_title;
    private string $review_text;
    private int $rating;

      function __construct($full_name, $book_title, $review_text, $rating) {
    $this->full_name = $full_name;
    $this->book_title = $book_title;
    $this->review_text = $review_text;
    $this->rating = $rating;
  }
}