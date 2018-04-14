<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StudentsController extends Controller
{
    /**
     * @Route("/students", name="students")
     */

    public function index()
    {
        $json = file_get_contents("data.json");
        $json_a = json_decode($json, true);

        return $this->render('students/index.html.twig', [
            'controller_name' => 'StudentsController',
            'data' => $json_a
        ]);
    }
}
