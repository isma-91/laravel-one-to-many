<?php

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            $title = $faker->words(rand(3, 7), true);
            // $title = 'Bella'; // Solo per provare
            Post::create([
                //Per far funzionare bene lo slug dobbiamo implementare una funzione nel Model perchè abbiamo detto che lo slug deve essere univoco, quindi non ce ne deve essere più di uno con lo stesso nome, però lo slug viene creato dal "title" che non deve e non può essere sempre univoco, così si creerebbero più slug uguali perchè ci saranno più titoli uguali, quindi ci serve la funzione per far cambiare il nome dello slu ogni volta che ne trova uno uguale
                'slug'      => Post::getSlug($title),
                'title'     => $title,
                'image'     => 'https://picsum.photos/id/'. rand(0, 1000) .'/500/400',
                'content'   => $faker->paragraphs(rand(1, 10), true),
                'excerpt'   => $faker->paragraph(),
            ]);
        }
    }

}
