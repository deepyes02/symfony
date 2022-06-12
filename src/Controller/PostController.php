<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class PostController extends AbstractController
{
	#[Route('/post', name: 'create_product')]
	public function create_product(ManagerRegistry $doctrine, ValidatorInterface $validator): Response
	{
		$post = new Post();
		$post->setTitle('Hello from Symfony');
		$post->setAuthor('Radhika Ghimire');
		$post->setCreated(new DateTime('now'));
		$post->setSlug($this->create_slug($post->getTitle()));

		// tell Doctrine you want to (eventually) save the Product (no queries yet)
		$entityManager = $doctrine->getManager();
		$entityManager->persist($post);


		$errors = $validator->validate($post);
		if (count($errors) > 0) {
			$errorsString = (string) $errors;
			return new Response($errorsString);
		}
		// sql inser
		$entityManager->flush();

		return new Response('Inserted post with id ' . $post->getId() . '.');
	}
	private function create_slug($title)
	{
		return str_split(strtolower(implode("-", explode("+", urlencode(trim($title)), '15'))), 125)[0];
	}
}
