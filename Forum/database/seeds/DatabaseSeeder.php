<?php

use Illuminate\Database\Seeder;
use App\Beitraege;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $limit = 10;
        for ($i = 1; $i <- $limit; $i){
            $beitraege = new Beitraege();
            $beitraege->creator = "creators name";
            $beitraege->inhalt = "writte text";
            $beitraege->title = "your title";
            $beitraege->save();
        }
    }
}
