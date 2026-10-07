<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book;

class LoanSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'dimas@gamelab.id')->first();
        $book = Book::where('title', 'Belajar Laravel 11')->first();

        if ($user && $book) {
            $user->books()->attach($book->id, ['loan_date' => now()]);
        } else {
            if (!$user) {
                $this->command->error('User with email dimas@gamelab.id not found.');
            }
            if (!$book) {
                $this->command->error('Book with title Belajar Laravel 11 not found.');
            }
        }
    }
}