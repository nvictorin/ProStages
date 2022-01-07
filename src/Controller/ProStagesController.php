<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;
use App\Entity\Entreprise;
use App\Entity\Formation;
use App\Repository\StageRepository;
use App\Repository\EntrepriseRepository;
use App\Repository\FormationRepository;

class ProStagesController extends AbstractController
{
    public function index(StageRepository $repositoryStage): Response
    {
        //Récupérer les ressources enregistrées en BD
        $stages = $repositoryStage->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('pro_stages/index.html.twig',['stages'=>$stages]);
    }

    public function entreprises(EntrepriseRepository $repositoryEntreprise): Response
    {
        //Récupérer les ressources enregistrées en BD
        $entreprises = $repositoryEntreprise->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('pro_stages/entreprises.html.twig',['entreprises'=>$entreprises]);
    }

    public function entreprisesStages(Entreprise $stagesEntreprise, StageRepository $repositoryStage): Response
    {
        //Récupérer les ressources enregistrées en BD
        $stages = $repositoryStage->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('pro_stages/entreprisesStages.html.twig',['stagesEntreprise'=>$stagesEntreprise,'stages'=>$stages]);
    }

    public function formations(FormationRepository $repositoryFormation): Response
    {
        //Récupérer les ressources enregistrées en BD
        $formations = $repositoryFormation->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('pro_stages/formations.html.twig',['formations'=>$formations]);
    }

    public function formationsStages(Formation $stagesFormation): Response
    {
        //Récupérer le repository de l'entité Stage chargée de les afficher
        return $this->render('pro_stages/formationsStages.html.twig',['stagesFormation'=>$stagesFormation]);
    }

    public function stages(Stage $stage): Response
    {
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('pro_stages/stages.html.twig',['stage'=>$stage]);
    }
}
