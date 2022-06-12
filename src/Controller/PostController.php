<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
	protected $blogs = [
		'post one',
		'post two',
		'post three'
	];

	#[Route('/blogs', name: 'blogs')]
	public function displayBlogs(): Response
	{
		return $this->render(
			'blog/blog-archive.html.twig',
			['all_blogs' => $this->blogs]
		);
	}

	#[Route('/blog/{slug}', name: 'single-blog')]
	public function displayBlogBySlug(String $slug): Response
	{
		return $this->render(
			'blog/blog-single.html.twig',
			['slug' => $slug]
		);
	}
}
