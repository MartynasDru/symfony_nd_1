<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StudentController extends Controller
{
    /**
     * @Route("/academy", name="academy")
     */

    public function index(request $request)
    {

        return $this->render('academy/index.html.twig', [
            'controller_name' => 'StudentController',
            'student' => $request->query->get('utm_term'),
            'mentor' => $request->query->get('utm_campaign'),
            'projectName' => $request->query->get('utm_content')
        ]);
    }


}
