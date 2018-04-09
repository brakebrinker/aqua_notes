<?php
/**
 * Created by PhpStorm.
 * User: m.pevnev
 * Date: 6.4.18
 * Time: 13.02
 */

namespace AppBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction() {

        return $this->render('main/homepage.html.twig');
    }

}