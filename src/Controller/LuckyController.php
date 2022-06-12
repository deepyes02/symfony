<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
	public function number(): Response
	{
		$number = random_int(10,100);

		return new Response(
			'<html><body>Lucky Number: ' . $number . '</body></html>'
		);
	}
}