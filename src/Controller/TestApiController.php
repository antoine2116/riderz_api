<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestApiController extends AbstractController {

    /**
     * @Route("/api/test", name="blog_show")
     */
    public function show() {
        return new Response(
            '<html><body>Lucky number:</body></html>'
        );
    }
}
