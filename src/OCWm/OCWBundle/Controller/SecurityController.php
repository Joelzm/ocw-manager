<?php

namespace OCWm\OCWBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

/**
 * Security controller
 * @Route("/app")
 */
class SecurityController extends Controller{
    /**
     * Definimos las rutas para el login
     * @Route("/login", name="login") 
     * @Route("/login_check", name="login_check")
     */
    public function loginAction(){
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)){
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        }else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('OCWmOCWBundle:Security:login.html.twig', array('last_username' => $session->get(SecurityContext::LAST_USERNAME), 'error' => $error));
    }
    
    /**
     *@Route("/", name="app")
     */
    public function appAction(){
        $user = $this->get('security.context')->getToken()->getUser();
        return $this->render("OCWmOCWBundle:Security:app.html.twig", array("user"=>$user));
    }
    
    /**
     * @Route("/logout", name="logout") 
     */
    public function logoutAction(){
        $this->get("request")->getSession()->invalidate();
        $this->get("security.context")->setToken(null);
        return new RedirectResponse($this->generateUrl('home'));
    }
}
?>
