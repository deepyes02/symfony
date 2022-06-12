<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
	#[Route('/lucky/number', name: 'lucky_number')]
	public function number(): Response
	{
		$number = random_int(1, 10);

		// return new Response(
		// 	'<html><body>Lucky Number: ' . $number . '</body></html>'
		// );

		return $this->render(
			'lucky/number.html.twig',
			['number' => $number]
		);
	}
}
