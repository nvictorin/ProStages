<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;
use App\Entity\Entreprise;
use App\Entity\Formation;

class ProStagesController extends AbstractController
{
    public function index(): Response
    {
        //Récupérer le repository de l'entité Stage
        $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);
        //Récupérer les ressources enregistrées en BD
        $stages = $repositoryStage->findAll();
        //Récupérer le repository de l'entité Formation
        $repositoryFormation = $this->getDoctrine()->getRepository(Formation::class);
        //Récupérer les ressources enregistrées en BD
        $formations = $repositoryFormation->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('pro_stages/index.html.twig',['stages'=>$stages,'formations'=>$formations]);
    }

    public function entreprises(): Response
    {
        //Récupérer le repository de l'entité Entreprise
        $repositoryEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);
        //Récupérer les ressources enregistrées en BD
        $entreprises = $repositoryEntreprise->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('pro_stages/entreprises.html.twig',['entreprises'=>$entreprises]);
    }

    public function entreprisesStages($id): Response
    {
        //Récupérer le repository de l'entité Entreprise
        $repositoryStagesEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);
        //Récupérer les ressources enregistrées en BD
        $stagesEntreprise = $repositoryStagesEntreprise->find(['id'=>$id]);
        //Récupérer le repository de l'entité Stage
        $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);
        //Récupérer les ressources enregistrées en BD
        $stages = $repositoryStage->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('pro_stages/entreprisesStages.html.twig',['stagesEntreprise'=>$stagesEntreprise,'stages'=>$stages]);
    }

    public function formations(): Response
    {
        //Récupérer le repository de l'entité Formation
        $repositoryFormation = $this->getDoctrine()->getRepository(Formation::class);
        //Récupérer les ressources enregistrées en BD
        $formations = $repositoryFormation->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('pro_stages/formations.html.twig',['formations'=>$formations]);
    }

    public function formationsStages($id): Response
    {
        //Récupérer le repository de l'entité Formation
        $repositoryStagesFormation = $this->getDoctrine()->getRepository(Formation::class);
        //Récupérer les ressources enregistrées en BD
        $stagesFormation = $repositoryStagesFormation->find(['id'=>$id]);
        //Récupérer le repository de l'entité Stage
        $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);
        //Récupérer les ressources enregistrées en BD
        $stages = $repositoryStage->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('pro_stages/formationsStages.html.twig',['stagesFormation'=>$stagesFormation,'stages'=>$stages]);
    }

    public function stages($id): Response
    {
        //Récupérer le repository de l'entité Stage
        $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);
        //Récupérer les ressources enregistrées en BD
        $stage = $repositoryStage->find(['id'=>$id]);
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('pro_stages/stages.html.twig',['stage'=>$stage]);
    }
}
