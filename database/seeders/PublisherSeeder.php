<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
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
                'name' =>  "Prentice Hall"
            ],
            [
                'name' =>  "Microsoft Press"
            ],
            [
                'name' =>  "The MIT Press"
            ],
            [
                'name' =>  "Addison-Wesley Professional"
            ],
            [
                'name' =>  "O’Reilly Media"
            ]
        ];
        foreach ($data as $item) {
            Publisher::create($item);
        }
    }
}
