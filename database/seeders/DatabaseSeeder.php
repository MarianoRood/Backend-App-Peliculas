<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categories;
use App\Models\Directors;
use App\Models\Salas;
use App\Models\Peliculas;
use App\Models\Funciones;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data_categories = [
            [
                'name_category' => 'Acción',
                'description'=> 'En este género prevalecen altas dosis de adrenalina con una buena carga de movimiento, fugas, acrobacias, peleas, guerras, persecuciones y una lucha contra el mal.'
            ],
            [
                'name_category' => 'Aventuras',
                'description'=> 'Similares a las de acción, predominan las nuevas experiencias y situaciones.'
            ],
            [
                'name_category' => 'Ciencia Ficción',
                'description'=> 'Basados en fenómenos imaginarios, en la ciencia ficción son usuales los extraterrestres, sociedades inventadas, otros planetas'
            ],
            [
                'name_category' => 'Comedia',
                'description'=> 'Diseñadas específicamente para provocar la risa o la alegría entre los espectadores.'
            ],
            [
                'name_category' => 'No- Ficción / documental',
                'description'=> 'Este género analiza un hecho o situación real sin ficcionarlo.'
            ],
            [
                'name_category' => 'Drama',
                'description'=> 'Los dramas se centran en desarrollar el problema o problemas entre los diferentes protagonistas. Este es quizás uno de los géneros cinematográficos más amplios de la lista. No predominan las aventuras o la acción, aunque pueden aparecer puntualmente Generalmente se basan en desarrollar la interacción y caracteres humanos.'
            ],
            [
                'name_category' => 'Fantasía',
                'description'=> 'En ellas se incluyen personajes irreales o totalmente inventados, inexistentes en nuestra realidad. También podemos conocer este género de cine como “fantástico”. No se basa en ideas que puedan llegar a materializarse.'
            ],
            [
                'name_category' => 'Musical',
                'description'=> 'Las películas que cortan su desarrollo natural con fragmentos musicales son protagonistas de este género.'
            ],
            [
                'name_category' => 'Terror',
                'description'=> 'El cine de terror es un género cinematográfico que se caracteriza por su voluntad de provocar en el espectador sensaciones de pavor, terror, miedo, disgusto, repugnancia, horror, incomodidad o preocupación. Sus argumentos frecuentemente desarrollan la súbita intrusión en un ámbito de alguna fuerza, evento o personaje de naturaleza maligna o celestial, a menudo de origen criminal o sobrenatural.'
            ]
        ];

        foreach ($data_categories as $data_category) {
            Categories::create($data_category);
        };

        $data_directores = [
            [
                'name_directory' => 'Scott Cawthon',
                'description' => 'Scott Braden Cawthon (Houston, Texas; 4 de junio de 1978) es un desarrollador de videojuegos, escritor y productor estadounidense.Es el creador de la franquicia Five Nights at Freddys, el cual empezó con el desarrollo del juego epónimo en 2014. Lanzado independientemente, el juego obtuvo rápidamente popularidad y un estatus de culto. Cawthon desarrolló 10 juegos en general serie de 2014 hasta su retiro en 2021, además de tres spin-offs. También escribió varias historias basadas en Five Nights at Freddys, incluyendo la novela Los Ojos de Plata y la Película'
            ],
            [
                'name_directory' => 'Nia DaCosta',
                'description' => 'Nia DaCosta (Brooklyn, Nueva York, 8 de noviembre de 1989) es una directora de cine y guionista estadounidense. Es conocida por su largometraje debut Little Woods (2019). Sus otros créditos incluyen la serie de televisión británica Top Boy (2011), el reinicio de Candyman (2021) y la película del Universo cinematográfico de Marvel, The Marvels (2023).'
            ],
            [
                'name_directory' => 'Eren Celeboglu',
                'description' => 'Eren Celeboglu fue escritor, director, director de episodios web y asistente de Bill Lawrence en Scrubs . También interpretó a un paciente en el episodio web Our Bedside Manner .'
            ],
            [
                'name_directory' => 'Francis Lawrence',
                'description' => 'Francis Lawrence (nacido el 26 de marzo de 1971) es un cineasta y productor estadounidense. Después de establecerse como director de vídeos musicales y comerciales, Lawrence hizo su debut como director de largometraje con el thriller de superhéroes Constantine (2005) y desde entonces dirigió la película de terror post-apocalíptica I Am Legend (2007), el drama romántico Water for Elephants (2011), cuatro de las cinco películas de la serie de películas Los juegos del hambre , y el thriller de espías Red Sparrow (2018).'
            ],
            [
                'name_directory' => 'Ridley Scott',
                'description' => 'Sir Ridley Scott (nacido el 30 de noviembre de 1937) es un cineasta inglés. Es mejor conocido por dirigir películas de los géneros de ciencia ficción , crimen y drama histórico . Su trabajo es conocido por su estilo visual atmosférico y altamente concentrado. Scott ha recibido muchos elogios a lo largo de su carrera, incluida la beca BAFTA por su trayectoria de la Academia Británica de Artes Cinematográficas y Televisivas en 2018, dos premios Primetime Emmy y un premio Globo de Oro .En 2003, la reina Isabel II lo nombró caballero .'
            ],
            [
                'name_directory' => 'Walt Dohrn',
                'description' => 'Walter "Walt" Dohrn (5 de diciembre de 1970) es un escritor, director, artista, actor, animador, músico, guionista y artista de voz estadounidense. Es más conocido como la voz de Rumpelstiltskin en Shrek Forever After (2010).1​ Proporcionó además la voz de un estudiante, Xavier, director Pynchley, un enano niñero, un malvado caballero, y un villano en Shrek tercero. También fue la voz de Bob Esponja en el episodio "Frankendoodle".'
            ],
            [
                'name_directory' => 'Cal Brunker',
                'description' => 'Callan Stuart "Cal" Brunker (nacido el 16 de noviembre de 1978) es un animador, guionista, guionista y director de cine canadiense. Es mejor conocido por dirigir la película animada de The Weinstein Company Escape from Planet Earth (2013), The Nut Job 2: Nutty by Nature (2017), PAW Patrol: The Movie (2021) de Nickelodeon y PAW Patrol: The Mighty. Movie (2023) están todos en colaboración con su socio comercial Bob Barlen , quien se desempeñó como coguionista de estas películas.'
            ]
        ];

        foreach ($data_directores as $data_director) {
            Directors::create($data_director);
        };


        $data_salas = [
            [
                'name_sala' => 'Sala 1',
                'rows' => 7,
                'cols' => 5
            ],
            [
                'name_sala' => 'Sala 2',
                'rows' => 10,
                'cols' => 7
            ],
            [
                'name_sala' => 'Sala 3',
                'rows' => 5,
                'cols' => 5
            ],
            [
                'name_sala' => 'Sala 4',
                'rows' => 9,
                'cols' => 8
            ],
            [
                'name_sala' => 'Sala 5',
                'rows' => 5,
                'cols' => 5
            ],
            [
                'name_sala' => 'Sala 6',
                'rows' => 10,
                'cols' => 5
            ],
            [
                'name_sala' => 'Sala 7',
                'rows' => 4,
                'cols' => 6
            ],
            [
                'name_sala' => 'Sala Junior',
                'rows' => 8,
                'cols' => 5
            ],
            [
                'name_sala' => 'Sala 8',
                'rows' => 6,
                'cols' => 6
            ],
            [
                'name_sala' => 'Sala 9',
                'rows' => 7,
                'cols' => 7
            ]
        ];

        foreach ($data_salas as $data_sala) {
            Salas::create($data_sala);
        };

        $data_peliculas = [
            [
                'title' => 'Paw Patrol: La Súper Película',
                'director_id' => 7,
                'duration' => 120,
                'categorie_id' => 7,
                'sipnosis' => 'Cuando un meteorito mágico aterriza en Adventure City, otorga superpoderes a los cachorros de PAW Patrol, ¡transformándolos en los SÚPER CACHORROS! Para Skye, la más pequeña del equipo, sus nuevos poderes son un sueño hecho realidad. Pero las cosas empeoran cuando el archirrival de los cachorros, Humdinger, escapa de la cárcel y se une a una científica loca para robarles los superpoderes. Con el destino de Adventure City en juego, los Súper Cachorros deberán detener a los supervillanos antes de que sea demasiado tarde, y Skye deberá aprender que incluso el cachorro más pequeño puede marcar la diferencia.',
                'path_img' => 'https://static.cinepolis.com/img/peliculas/42927/1/1/42927.jpg'
            ],
            [
                'title' => 'The Marvels',
                'director_id' => 2,
                'duration' => 127,
                'categorie_id' => 1,
                'sipnosis' => 'Carol Danvers, alias Capitana Marvel, ha recuperado su identidad de los tiránicos Kree y se ha vengado de la Inteligencia Suprema. Pero las consecuencias imprevistas hacen que Carol cargue con el peso de un universo desestabilizado. Cuando sus deberes la envían a un agujero de gusano anómalo vinculado a un revolucionario Kree, sus poderes se enredan con los de la superfan oriunda de la ciudad de Jersey, Kamala Khan, alias Ms. Marvel, y la sobrina distanciada de Carol, la ahora astronauta de S.A.B.E.R., la Capitana Mónica Rambeau. Juntos, este trío improbable deberá formar equipo y aprender a trabajar en conjunto para salvar el universo como THE MARVELS.',
                'path_img' => 'https://static.cinepolis.com/img/peliculas/44080/1/1/44080.jpg'
            ],
            [
                'title' => 'Juega o Muere',
                'director_id' => 3,
                'duration' => 97,
                'categorie_id' => 9,
                'sipnosis' => 'Mientras se entretenían con lo que parecía ser un juego inocente, un grupo de jóvenes invoca a un demonio, que posee a Marcus (Asa Butterfield), quien obliga a los demás a jugar juegos tradicionales como: Red Rover, linterna con fuego, Simon dice salta, con consecuencias mortales. Entre los sobrevivientes a los juegos, se encuentra Billie (Natalia Dyer) la hermana de Marcus, quien se enfrentará al demonio para intentar salvar a su hermano',
                'path_img' => 'https://static.cinepolis.com/img/peliculas/43901/1/1/43901.jpg'
            ],
            [
                'title' => 'Five Nights at Freddys: La Película',
                'director_id' => 1,
                'duration' => 129,
                'categorie_id' => 9,
                'sipnosis' => 'El terrorífico fenómeno del videojuego de terror se transforma en un escalofriante espectáculo cinematográfico, Blumhouse (productora de M3GAN, El teléfono negro y El hombre invisible) lleva Five Nights at Freddys a la gran pantalla. La película trata de un problemático guardia de seguridad que empieza a trabajar en Freddy Fazbears Pizza. Mientras pasa su primera noche en el trabajo, se da cuenta de que el turno de noche en Freddys no será tan fácil de superar.',
                'path_img' => 'https://static.cinepolis.com/img/peliculas/43450/1/1/43450.jpg'
            ],
            [
                'title' => 'Los Juegos del Hambre Balada de Pájaros Cantores',
                'director_id' => 4,
                'duration' => 180,
                'categorie_id' => 3,
                'sipnosis' => 'En este regreso de los Juegos del Hambre, años antes de que se convirtiera en el presidente tirano de Panem, un joven Coriolanus Snow(Tom Blyth) ver la oportunidad de un cambio de fortunas cuando es elegido para ser mentor de Lucy Gray Baird (Rachel Zegler) , la chica tributo del empobrecido Distrito 12. Con la multiganadora perteneciente a la categoría EGOT Viola Davis y el reconocido Peter Dinklage.',
                'path_img' => 'https://static.cinepolis.com/img/peliculas/42400/1/1/42400.jpg'
            ]
        ];

        foreach ($data_peliculas as $data_pelicula) {
            Peliculas::create($data_pelicula);
        };

        $data_funciones = [
            [
                'pelicula_id' => 1,
                'sala_id' => 8,
                'hour_function' => '18:20:00',
                'date_function' => '2023-11-15'
            ],
            [
                'pelicula_id' => 4,
                'sala_id' => 7,
                'hour_function' => '13:20:00',
                'date_function' => '2023-11-15'
            ],
            [
                'pelicula_id' => 4,
                'sala_id' => 4,
                'hour_function' => '16:20:00',
                'date_function' => '2023-11-16'
            ],
            [
                'pelicula_id' => 1,
                'sala_id' => 8,
                'hour_function' => '18:20:00',
                'date_function' => '2023-11-16'
            ]
        ];

        foreach ($data_funciones as $data_funcion) {
            Funciones::create($data_funcion);
        };
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
