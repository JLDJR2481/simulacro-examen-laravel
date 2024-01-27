<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'titulo' => 'MistBorn',
            'extracto' => 'La saga de libro más famosa del mundo',
            'contenido' => 'Mistborn es conocida por su sistema de magia único basado en la ingestión y quema de metales. El mundo está sumido en la oscuridad y la opresión, y los protagonistas buscan desafiar un régimen tiránico. A medida que la serie avanza, Sanderson explora temas más amplios, como la religión, la política y las consecuencias imprevistas de los actos heroicos.

            La saga ha recibido elogios por su mundo detallado, personajes complejos y un sistema de magia innovador. Brandon Sanderson es conocido por su estilo narrativo distintivo y su capacidad para crear mundos y sistemas de magia únicos en la fantasía moderna.',
            'caducable' => false,
            'comentable' => true,
            'acceso' => 'publico',
            'user_id' => 1,
        ]);
        DB::table('posts')->insert([
            'titulo' => 'Dune',
            'extracto' => 'Una de las series que cautivó al mundo',
            'contenido' => '"Dune" es una serie de ciencia ficción que se destaca por su exploración profunda de la política, la religión y la ecología en un futuro lejano. La saga se inicia con la llegada de la familia Atreides al árido planeta Arrakis, que es crucial para la producción de una especia que otorga habilidades especiales. La serie aborda temas complejos y presenta un mundo intrincado lleno de intrigas y desafíos.

            La primera novela, "Dune", en particular, es considerada un clásico de la ciencia ficción y ha influido en muchas obras posteriores del género. La saga "Dune" ha sido adaptada a diferentes formas de medios, incluyendo películas y series de televisión.',
            'caducable' => false,
            'comentable' => true,
            'acceso' => 'publico',
            'user_id' => 1,
        ]);
    }
}
