<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProstageController extends AbstractController
{
    /**
     * @Route("/", name="prostage")
     */
    public function index(): Response
    {
        return $this->render('Prostage/index.html.twig', [
            'controller_name' => 'ProstageController',
        ]);
    }
	/**
     * @Route("/entreprises", name="stage_entreprises")
     */
    public function entreprises(): Response
    {
        return $this->render('Prostage/entreprises.html.twig');
    }
	/**
     * @Route("/formations", name="stage_formations")
     */
    public function formations(): Response
    {
        return $this->render('Prostage/formations.html.twig');
    }
	/**
     * @Route("/stages/{id}", name="stages")
     */
    public function stages($id): Response
    {
        return $this->render('Prostage/stages.html.twig', [
            'idstage' => $id,
        ]);
    }
}
