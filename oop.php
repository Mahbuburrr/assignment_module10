<?php

class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function borrowBook($book) {
        if ($book->borrowBook()) {
            // echo "{$this->name} borrowed '{$book->getTitle()}'\n";
        } else {
            echo "Sorry, '{$book->getTitle()}' is not available for borrowing\n";
        }
    }

    public function returnBook($book) {
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}'\n";
    }
}

// Create books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Display initial state
echo "Initial State:<br>";
echo "{$book1->getTitle()} - Available Copies: {$book1->getAvailableCopies()} <br> ";
echo "{$book2->getTitle()} - Available Copies: {$book2->getAvailableCopies()}<br> <br>";

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Display state after borrowing
echo "\nAfter Borrowing:<br>";
echo "{$book1->getTitle()} - Available Copies: {$book1->getAvailableCopies()}<br> ";
echo "{$book2->getTitle()} - Available Copies: {$book2->getAvailableCopies()}\n\n";

// Members return books
/* $member1->returnBook($book1);
$member2->returnBook($book2);

// Display final state
echo "\nFinal State:\n";
echo "{$book1->getTitle()} - Available Copies: {$book1->getAvailableCopies()}\n";
echo "{$book2->getTitle()} - Available Copies: {$book2->getAvailableCopies()}\n"; */

?>
