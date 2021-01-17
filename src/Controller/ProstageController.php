<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProstageController extends AbstractController
{
    /**
     * @Route("/prostage", name="prostage")
     */
    public function index(): Response
    {
        return $this->render('prostage/index.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }
	/**
     * @Route("/entreprises", name="stage_par_entreprises")
     */
    public function entreprises(): Response
    {
        return $this->render('prostage/entreprises.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }
	/**
     * @Route("/formations", name="stage_par_formations")
     */
    public function formations(): Response
    {
        return $this->render('prostage/formations.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }
	/**
     * @Route("/stages/{id}", name="stages")
     */
    public function stages($id): Response
    {
        return $this->render('prostage/stages.html.twig', [
            'idstage' => $id,
        ]);
    }
}
