<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function indexAdminAction()
    {
        return $this->render('UserBundle:Default:admin.html.twig');
    }
    /**
     * @Route("/custumer/dashboard", name="custumer_dashboard")
     */
    public function indexCustumerAction()
    {
        return $this->render('UserBundle:Default:custumer.html.twig');
    }
    /**
     * @Route("/prestatire/dashboard", name="prestatire_dashboard")
     */
    public function indexPrestatireAction()
    {
        return $this->render('UserBundle:Default:prestatire.html.twig');
    }
    /**
     * @Route("/partenaire/dashboard" , name="partenaire_dashboard")
     */
    public function indexPartenaireAction()
    {
        return $this->render('UserBundle:Default:partenaire.html.twig');
    }
    /**
     * @Route("/dashboard/user/list" , name="user_index")
     */
    public function indexUserAction()
    {
        $users = $this->getDoctrine()
        ->getRepository(User::class)
        ->findAll();

        return $this->render('default/User/index.html.twig', array(
            'users' => $users
        ));
    }
}
