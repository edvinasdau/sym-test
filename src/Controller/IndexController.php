<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route ("/index")
     */
    public function home()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/dp", name="dp")
     */
    public function dp()
    {
        return $this->render('dp.html.twig');
    }

    /**
     * @Route ("/education")
     */
    public function education()
    {
        return $this->render('education.html.twig');
    }

    /**
     * @Route ("/contacts")
     */
    public function contacts()
    {
        return $this->render('contacts.html.twig');
    }

    /**
     * @Route ("/soft_skills")
     */
    public function soft_skills()
    {
        return $this->render('soft_skills.html.twig');
    }
    /**
     * @Route ("/portfolio")
     */
    public function portfolio()
    {
        return $this->render('portfolio.html.twig');
    }

    /**
     * @Route ("/ate")
     */

    public function ate()
    {
        return new Response("<b>ate</b>");
    }
}