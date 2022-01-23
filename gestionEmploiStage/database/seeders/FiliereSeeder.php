<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filieres')->insert([
            ['libelle' => 'Developpement back-end','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 1,
            ],

            ['libelle' => 'Developpement front-end','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 1,
            ],

            ['libelle' => 'Analyse performance digital','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 1,
            ],

            ['libelle' => 'Réseau IOT','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 1,
            ],

            ['libelle' => 'Administration base de donnée','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 1,
            ],
            ['libelle' => 'Gestion des données de l\entreprise','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 1,
            ],



            ['libelle' => 'Mécanique automobile','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 2,
            ],

            ['libelle' => 'Electricité automobile','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 2,
            ],

            ['libelle' => 'Froid et climatisation','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 2,
            ],

            ['libelle' => 'Carroserie automobile','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 2,
            ],



            //Promotion 2

            ['libelle' => 'Developpement back-end','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 3,
            ],

            ['libelle' => 'Developpement front-end','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 3,
            ],

            ['libelle' => 'Analyse performance digital','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 3,
            ],

            ['libelle' => 'Réseau IOT','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 3,
            ],

            ['libelle' => 'Administration base de donnée','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 3,
            ],
            ['libelle' => 'Gestion des données de l\entreprise','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 3,
            ],



            ['libelle' => 'Mécanique automobile','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 4,
            ],

            ['libelle' => 'Electricité automobile','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 4,
            ],

            ['libelle' => 'Froid et climatisation','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 4,
            ],

            ['libelle' => 'Carroserie automobile','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
            'departement_id' => 4,
            ],
        ]);
    }
}
