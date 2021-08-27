<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->get() as $item){
            DB::table('categories')->insert([
                // 'id' => $item['id'],
                'title' => $item['title'],
                'description' => $item['description'],
                'belongs_to' => $item['belongs_to'],
            ]);
        }
    }

    private function get()
    {
        $categories = array(
            array(
                "id" => 1,
                "title" => "Fleurs d'Été",
                "description" => "Fleurs d'été et vivaces pour jardinières au soleil.",
                "belongs_to" => 9,
            ),
            array(
                "id" => 2,
                "title" => "Fleurs d'Automne",
                "description" => "Floraison automnale : les plus belles fleurs qui ornent le jardin à l'automne.",
                "belongs_to" => 9,
            ),
            array(
                "id" => 3,
                "title" => "Fleurs d'Hiver",
                "description" => "Les plantes qui fleurissent en hiver à l'extérieur ne sont pas si nombreuses. A planter à l'automne ou un peu plus tard, elles donneront de jolies fleurs l'hiver.",
                "belongs_to" => 9,
            ),
            array(
                "id" => 4,
                "title" => "Fleurs de Printemps",
                "description" => "Floraison printanière : les plus belles fleurs qui ornent le jardin au printemps des magnolias aux tulipes et muscaris d'Arménie.",
                "belongs_to" => 9,
            ),
            array(
                "id" => 5,
                "title" => "Arbustes",
                "description" => "Indispensables dans l'aménagement d'un jardin, les arbustes sont appréciés pour leur grande diversité.",
                "belongs_to" => 10,
            ),
            array(
                "id" => 6,
                "title" => "Haies",
                "description" => "Voici des arbustes de petite et grande taille, pour créer tous les types de haies, qu'elles soient taillées ou libres, défensives, ...",
                "belongs_to" => 10,
            ),
            array(
                "id" => 7,
                "title" => "Fruits",
                "description" => "Le terme « fruit » provient du latin fructus qui a, dès l'époque latine, les différents sens que l'on lui connaît aujourd’hui. C'était le participe passé de fruor.",
                "belongs_to" => 11,
            ),
            array(
                "id" => 8,
                "title" => "Légumes",
                "description" => "Un légume est la partie comestible d'une plante potagère1. Cette définition, reprise par la plupart des dictionnaires de langue française, doit être étendue aux champignons comestibles, dont certains sont cultivés (champignon de Paris, shii-také, etc.) et à certaines algues, dont la consommation est la plus développée en Extrême-Orient2. Cette partie peut être une racine (carotte), une tige (céleri), une feuille (laitue), une fleur (artichaut), un fruit (poivron), un bulbe (oignon), un tubercule (pomme de terre) ou une graine (maïs).",
                "belongs_to" => 11,
            ),
            array(
                "id" => 9,
                "title" => "Fleurs",
                "description" => "lorem",
                'belongs_to' => NULL
            ),
            array(
                "id" => 10,
                "title" => "Futaie",
                "description" => "lorem",
                'belongs_to' => NULL
            ),
            array(
                "id" => 11,
                "title" => "Fruits & Légumes",
                "description" => "lorem",
                'belongs_to' => NULL
            ),
        );
        return (object) $categories;        
    }
}
