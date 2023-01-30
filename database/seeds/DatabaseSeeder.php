<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Se le tabelle dei seeder qui sotto elencate sono collegate tra loro, mettere queste righe di seeder nell'ordine corretto così che venga popolata prima la tabella, che per esempio, deve fornire una chiave esterna ad un altra tabella, altrimenti quest'ultima verrebbe creata prima che sia presente la tabella che gli deve passare la chiave esterna e darebbe errore.
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
    }
}
