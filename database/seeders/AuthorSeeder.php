<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
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
                'name' =>  "Robert C. Martin"
            ],
            [
                'name' =>  "Thomas H. Cormen"
            ],
            [
                'name' =>  "Charles E. Leiserson"
            ],
            [
                'name' =>  "Ronald L. Rivest"
            ],
            [
                'name' =>  "Harold Abelson"
            ],
            [
                'name' =>  "Gerald Jay Sussman"
            ],
            [
                'name' =>  "Julie Sussman"
            ],
            [
                'name' =>  "Steve McConnell"
            ],
        ];
        foreach ($data as $item) {
            Author::create($item);
        }
    }
}
