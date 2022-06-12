<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

	#[Route(
		'/contact',
		name: 'contact',
		// condition: "context.getMethod() in ['GET', 'HEAD'] and request.headers.get('User-Agent') matches '/firefox/i'",
	)]
	public function contact(): Response
	{
		$contact_num = 9860120956;
		return $this->render(
			'contact/contact.html.twig',
			['contact_number'	=> $contact_num]
		);
	}

	#[Route(
		'/contact/{id}',
		name: 'Get Contact By Id',
		condition:"params['id']<500",
	)]
	public function showContactById(int $id): Response
	{
		return $this->render(
			'contact/contact-single.html.twig',
			['contact_id'	=> $id]
		);
	}
}
