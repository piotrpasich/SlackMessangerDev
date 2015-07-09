<?php

namespace XTeam\SlackMessengerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('XTeamSlackMessengerBundle:Default:index.html.twig', array('name' => $name));
    }
}
