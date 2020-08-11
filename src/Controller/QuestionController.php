<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Loader\Configurator\AbstractServiceConfigurator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
	public function homepage()
	{
		return $this->render('question/homepage.html.twig');
	}

    /**
     * @Route("/qeustions/{slug}", name="app_question_show")
     */
	public function show($slug)
    {
        $answers = [
            'Dit is antwoord op vraag 1',
            'Hier nog wat tekst om het te testen',
            'Bananen zijn krom want ze groeien naar het lichts'
        ];

        dump($this);

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);
    }
}
