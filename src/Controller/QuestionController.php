<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
        return new Response(sprintf(
            'If you can jump very high maybe you can fly "%s"',  ucwords(str_replace('-', ' ', $slug))
        ));
    }
}
