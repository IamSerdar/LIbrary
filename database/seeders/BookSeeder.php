<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' =>  "Clean Code: A Handbook of Agile Software Craftsmanship",
                'publisher_id' => 1,
                'author_ids' => [
                    1
                ],
            ],
            [
                'name' =>  "Introduction to Algorithms",
                'publisher_id' => 3,
                'author_ids' => [
                    2, 3, 4
                ],
            ],
            [
                'name' =>  "Structure and Interpretation of Computer Programs (SICP)",
                'publisher_id' => 3,
                'author_ids' => [
                    5, 6, 7
                ],
            ],
            [
                'name' =>  " The Clean Coder: A Code of Conduct for Professional Programmers",
                'publisher_id' => 1,
                'author_ids' => [
                    1
                ],
            ],
            [
                'name' =>  "Code Complete: A Practical Handbook of Software Construction",
                'publisher_id' => 2,
                'author_ids' => [
                    8
                ],
            ],
            [
                'name' =>  "Design Patterns",
                'publisher_id' => 4,
                'author_ids' => [
                    8
                ],
            ],
            [
                'name' =>  "The Pragmatic Programmer",
                'publisher_id' => 4,
                'author_ids' => [
                    2, 4
                ],
            ],
            [
                'name' =>  "Head First Design Patterns: A Brain-Friendly Guide",
                'publisher_id' => 5,
                'author_ids' => [
                    5, 6, 8
                ],
            ],
            [
                'name' =>  "Clean Code: A Handbook of Agile Software Craftsmanship",
                'publisher_id' => 1,
                'author_ids' => [
                    1
                ],
            ],
            [
                'name' =>  "Introduction to Algorithms",
                'publisher_id' => 3,
                'author_ids' => [
                    2, 3, 4
                ],
            ],
            [
                'name' =>  "Structure and Interpretation of Computer Programs (SICP)",
                'publisher_id' => 3,
                'author_ids' => [
                    5, 6, 7
                ],
            ],
            [
                'name' =>  " The Clean Coder: A Code of Conduct for Professional Programmers",
                'publisher_id' => 1,
                'author_ids' => [
                    1
                ],
            ],
            [
                'name' =>  "Code Complete: A Practical Handbook of Software Construction",
                'publisher_id' => 2,
                'author_ids' => [
                    8
                ],
            ],
            [
                'name' =>  "Design Patterns",
                'publisher_id' => 4,
                'author_ids' => [
                    8
                ],
            ],
            [
                'name' =>  "The Pragmatic Programmer",
                'publisher_id' => 4,
                'author_ids' => [
                    2, 4
                ],
            ],
            [
                'name' =>  "Head First Design Patterns: A Brain-Friendly Guide",
                'publisher_id' => 5,
                'author_ids' => [
                    5, 6, 8
                ],
            ]
        ];
        foreach ($data as $item) {
            $book = Book::create([
                'name' => $item['name'],
                'publisher_id' => $item['publisher_id']
            ]);
            $book->authors()->attach($item['author_ids']);
        }
    }
}
