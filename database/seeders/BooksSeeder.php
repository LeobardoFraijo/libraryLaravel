<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //authors examples
        $author = new Author();
        $author->name = "Piero Berni Millet";
        $author->author_description = "Investigador ICAC, Tarragona";
        $author->save();

        $author2 = new Author();
        $author2->name = "Tutorialspoint.com";
        $author2->author_description = "Varios autores";
        $author2->save();

        $author3 = new Author();
        $author3->name = "Aurelio Baldor";
        $author3->author_description = " matemático, profesor, escritor y abogado cubano";
        $author3->save();

        Author::factory()->count(30)->create();

        

        //tipo de libro
        $bookType = new BookType();
        $bookType->name = "Base de datos";
        $bookType->save();

        $bookType2 = new BookType();
        $bookType2->name = "Álgebra";
        $bookType2->save();

        BookType::factory()->count(10)->create();

        //books examples
        $book = new Book();
        $book->name = "Laboratorio de PHP y MySQL";
        $book->publisher = "UOC";
        $book->publication_date = "02/07/2012";
        $book->book_type_id = 1;
        $book->save();

        $book2 = new Book();
        $book2->name = "MySQL Tutorial";
        $book2->publisher = "Tutorialspoint.com";
        $book2->publication_date = "07/06/2011";
        $book2->book_type_id = 1;
        $book2->save();

        $book3 = new Book();
        $book3->name = "Álgebra";
        $book3->publisher = "Patria";
        $book3->publication_date = "01/08/2019";
        $book3->book_type_id = 2;
        $book3->save();


        $books =  Book::factory()->count(50)->create();

        //linked authors with books
        foreach($books as $book){
            $percentage = rand(1, 10);
            if($percentage <= 2){
                $book->authors()->attach([
                    rand(1, 30),
                    rand(1, 30)
                ]);
            }else{
                $book->authors()->attach(rand(1, 30));
            }            
        }        
    }
}
