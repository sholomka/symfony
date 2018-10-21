<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BlogController extends Controller
{
    /**
     * @Route("/{_locale}", defaults={"_locale" = "en"}, requirements={"_locale" = "en|fr"})
     */
    public function homepage($_locale)
    {

        $blog_entries = [
            ['title' => 'title', 'body' => 'body'],
        ];

        return $this->render('blog.html.twig', [
            'blog_entries' => $blog_entries
        ]);
    }
    
    /**
     * Matches /blog exactly
     *
     * @Route("/blog/{page}", name="blog_list", requirements={"page" = "\d+"})
     */
    public function list($page)
    {

        echo $this->generateUrl('blog_list', ['page' => 1, 'category' => 'symfony'], UrlGeneratorInterface::ABSOLUTE_URL) . "\n";

        return new Response('list, page number: ' . $page);
    }


    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug)
    {
        return new Response('show: ' . $slug);
    }
}