<?php

    namespace Database\Seeders;

    use App\Models\Gemba;
    use App\Models\Name;
    use Database\Factories\GembaFactory;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    use Faker\Factory as Faker;


    class GembaSeeder extends Seeder
    {
        public function run(): void
        {
            Gemba::factory(30)->create();

        }
    }
