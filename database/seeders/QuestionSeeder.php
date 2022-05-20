<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'title' => 'Question 1/20',
            'description' => 'Votre adresse mail',
            'type'=>'b',
            'choices'=>'',
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 2/20',
            'description' => 'Votre âge',
            'type'=>'b',
            'choices'=>'',
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 3/20',
            'description' => 'Votre sexe',
            'type'=>'a',
            'choices'=>["Homme","Femme","Préfère de pas répondre"],
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 4/20',
            'description' => 'Nombre de personne dans votre foyer (adulte & enfants)',
            'type'=>'c',
            'choices'=>'',
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 5/20',
            'description' => 'Votre profession',
            'type'=>'b',
            'choices'=>'',
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 6/20',
            'description' => 'Quel marque de casque VR utilisez vous ?',
            'type'=>'a',
            'choices'=>["Occulus Rift/s","HTC Vive","Windows Mixed Reality","PSVR"],
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 7/20',
            'description' => 'Sur quel magasin d’application achetez vous des contenus VR ?',
            'type'=>'a',
            'choices'=>["SteamVR","Occulus store","Viveport","Playstation VR","Google Play","Windows store"],
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 8/20',
            'description' => 'Quel casque envisagez-vous d’acheter dans un futur proche ?',
            'type'=>'a',
            'choices'=>["Occulus Quest","Occulus Go","HTC Vive Pro","Autre","Aucun"],
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 9/20',
            'description' => 'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen
            ?',
            'type'=>'c',
            'choices'=>'',
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 10/20',
            'description' => 'Vous utilisez principalement Bigscreen pour : ',
            'type'=>'a',
            'choices'=>["regarder des émissions TV en direct","regarder des films",
            "jouer en solo","jouer en team"],
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 11/20',
            'description' => 'Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?',
            'type'=>'c',
            'choices'=>'',
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 12/20',
            'description' => 'Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?',
            'type'=>'c',
            'choices'=>'',
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 13/20',
            'description' => 'Combien donnez vous de point pour la connection réseau de Bigscreen ?',
            'type'=>'c',
            'choices'=>'',
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 14/20',
            'description' => 'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?',
            'type'=>'c',
            'choices'=>'',
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 15/20',
            'description' => 'Combien donnez vous de point pour la qualité audio dans Bigscreen ?',
            'type'=>'c',
            'choices'=>'',
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 16/20',
            'description' => 'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
            'type'=>'a',
            'choices'=>["Oui","Non"],
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 17/20',
            'description' => 'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
            'type'=>'a',
            'choices'=>["Oui","Non"],
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 18/20',
            'description' => 'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
            'type'=>'c',
            'choices'=>'',
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 19/20',
            'description' => 'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?',
            'type'=>'c',
            'choices'=>'',
            'form_id'=> 1
        ]);

        Question::create([
            'title' => 'Question 20/20',
            'description' => 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?',
            'type'=>'b',
            'choices'=>'',
            'form_id'=> 1
        ]);
    }
}
