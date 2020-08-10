<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Loader\Configurator\AbstractServiceConfigurator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
	public function homepage()
	{
		return new Response('Very nice cont man!');
	}

    /**
     * @Route("/qeustions/{slug}")
     */
	public function show($slug)
    {
        $answers = [
            'Dit is antwoord op vraag 1',
            'Hier nog wat tekst om het te testen',
            'Bananen zijn krom want ze groeien naar het lichts'
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);
    }
}
