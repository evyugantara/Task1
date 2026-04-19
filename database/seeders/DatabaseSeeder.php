<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Loan;
use App\Models\LoanDetail;
use App\Models\ReturnModel;
use App\Models\Book; 
use App\Models\Bookshelf;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
       
        $user = User::create([
            'npm' => 12345,
            'first_name' => 'Ega',
            'last_name' => 'Virga',
            'email' => 'ega@gmail.com',
            'password' => bcrypt('123456'),
        ]);

            $bookshelf = Bookshelf::create([
            'name' => 'Rak A',
            'code' => 'RAK001'
        ]);
            $book = Book::create([
            'bookshelf_id' => $bookshelf->id,
            'title' => 'Belajar Laravel',
            'author' => 'Ega',
            'year' => 2024,
            'published_year' => 2024,
            'publisher' => 'Informatika Press', 
        ]);

    
        $loan = Loan::create([
            'user_npm' => $user->npm,
            'loan_at' => now(),
        ]);

        $detail = LoanDetail::create([
            'loan_id' => $loan->id,
            'book_id' => $book->id, 
            'is_return' => false,
        ]);

        
        ReturnModel::create([
            'loan_detail_id' => $detail->id,
        ]);
    }
}