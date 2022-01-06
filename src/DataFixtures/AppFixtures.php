<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Formation;
use App\Entity\Entreprise;
use App\Entity\Stage;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //ENTREPRISES
        //Alstom
        $e1 = new Entreprise();
        $e1->setNom("Alstom");
        $e1->setAdresse("50 Rue du Dr Guinier, 65600 Séméac");
        $e1->setActivite("Industrie ferroviaire");
        $e1->setSiteWeb("https://www.alstom.com/fr");
        $manager->persist($e1);
        //Ubisoft
        $e2 = new Entreprise();
        $e2->setNom("Ubisoft");
        $e2->setAdresse("66 - 72 Rue Marceau, 93100 Montreuil");
        $e2->setActivite("Industrie vidéoludique");
        $e2->setSiteWeb("https://www.ubisoft.com/fr-fr/");
        $manager->persist($e2);
        //Daher
        $e3 = new Entreprise();
        $e3->setNom("Daher");
        $e3->setAdresse("Route de l'Aéroport, 65290 Louey");
        $e3->setActivite("Constructeur d'avions, équipements & systèmes aéronautiques et logistique & services");
        $e3->setSiteWeb("https://www.daher.com/");
        $manager->persist($e3);
        //Nintendo
        $e4 = new Entreprise();
        $e4->setNom("Nintendo");
        $e4->setAdresse("13 avenue Maréchal Foch, 93100 Montreuil");
        $e4->setActivite("Industrie vidéoludique");
        $e4->setSiteWeb("https://www.nintendo.fr/");
        $manager->persist($e4);
        //Airbus
        $e5 = new Entreprise();
        $e5->setNom("Airbus");
        $e5->setAdresse("Airbus M01, M30, 31300 Toulouse");
        $e5->setActivite("Aéronautique");
        $e5->setSiteWeb("https://www.airbus.com/en");
        $manager->persist($e5);
        //FORMATIONS
        //DUT Info
        $f1 = new Formation();
        $f1->setNomCourt("DUT Info");
        $f1->setNomLong("DUT Informatique");
        $manager->persist($f1);
        //LP Métiers du Numérique
        $f2 = new Formation();
        $f2->setNomCourt("LP MN");
        $f2->setNomLong("Licence Pro Métiers du Numérique");
        $manager->persist($f2);
        //LP Prog Avancée
        $f3 = new Formation();
        $f3->setNomCourt("LP Prog Av");
        $f3->setNomLong("Licence Pro Programmation Avancée");
        $manager->persist($f3);
        //STAGES
        //Stage 1
        $s1 = new Stage();
        $s1->setTitre("Stage Assistant GameDesign");
        $s1->setMission("Pour ce stage, vôtre rôle sera d'accompagner votre tuteur dans son travail en Game Design sur le prochain jeu de la série Assassins Creed");
        $s1->setEmail("ubisoft-contact-stage@group-ubisoft.fr");
        $s1->setEntreprise($e2);
        $manager->persist($s1);
        //Stage 2
        $s2 = new Stage();
        $s2->setTitre("Stage Développeur Web H/F");
        $s2->setMission("Pour ce stage, vôtre rôle sera d'implémenter au format Html / CSS des templates de tunnels de vente pour nos clients via le logiciel Système.io. Pas de compétences requises sur Système.io (une formation sera donnée). Seules compétences nécessaires : MAÎTRISER Html et CSS.");
        $s2->setEmail("alstom-contact-stage@group-alstom.fr");
        $s2->setEntreprise($e1);
        $manager->persist($s2);
        //Stage 3
        $s3 = new Stage();
        $s3->setTitre("Stage Développeur WebDesign");
        $s3->setMission("Pour ce stage, vôtre rôle sera de proposer une nouvelle interface pour le site web de Daher.");
        $s3->setEmail("daher-contact-stage@group-daher.fr");
        $s3->setEntreprise($e3);
        $manager->persist($s3);
        //Stage 4
        $s4 = new Stage();
        $s4->setTitre("Stage Développeur Unity jeu vidéo / VR");
        $s4->setMission("Pour ce stage, vôtre rôle sera de mettre en place un jeu vidéo avec Unity.");
        $s4->setEmail("ubisoft-contact-stage@group-ubisoft.fr");
        $s4->setEntreprise($e2);
        $manager->persist($s4);
        //Stage 5
        $s5 = new Stage();
        $s5->setTitre("Stage Gameplay Developer H/F");
        $s5->setMission("Pour ce stage, vôtre rôle sera de coder un jeu vidéo.");
        $s5->setEmail("nintendo-contact-stage@group-nintendo.fr");
        $s5->setEntreprise($e4);
        $manager->persist($s5);
        //Stage 6
        $s6 = new Stage();
        $s6->setTitre("Stage Web analyst H/F");
        $s6->setMission("Pour ce stage, vôtre rôle sera de mener un travail de Web analyst.");
        $s6->setEmail("nintendo-contact-stage@group-nintendo.fr");
        $s6->setEntreprise($e4);
        $manager->persist($s6);
        //Stage 7
        $s7 = new Stage();
        $s7->setTitre("Stage Développeur Web PHP");
        $s7->setMission("Pour ce stage, vôtre rôle sera de développer un site web en PHP.");
        $s7->setEmail("daher-contact-stage@group-daher.fr");
        $s7->setEntreprise($e3);
        $manager->persist($s7);
        //Stage 8
        $s8 = new Stage();
        $s8->setTitre("Stage Développeur Python Web Scraping");
        $s8->setMission("Pour ce stage, vôtre rôle sera de coder en Python.");
        $s8->setEmail("airbus-contact-stage@group-airbus.fr");
        $s8->setEntreprise($e5);
        $manager->persist($s8);
        //Stage 9
        $s9 = new Stage();
        $s9->setTitre("Stage Assistant chef de projet Informatique H/F");
        $s9->setMission("Pour ce stage, vôtre rôle sera d'assister le chef de projet dans son travail.");
        $s9->setEmail("alstom-contact-stage@group-alstom.fr");
        $s9->setEntreprise($e1);
        $manager->persist($s9);
        //Stage 10
        $s10 = new Stage();
        $s10->setTitre("Stage Assistant Chef de projet AMOA H/F");
        $s10->setMission("Pour ce stage, vôtre rôle sera d'assister le chef de projet dans son travail.");
        $s10->setEmail("airbus-contact-stage@group-airbus.fr");
        $s10->setEntreprise($e5);
        $manager->persist($s10);

        $manager->flush();
    }
}
