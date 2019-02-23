<?php

namespace UserBundle\Security;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface {

    protected $router;
    protected $authorizationChecker;

    public function __construct(Router $router, AuthorizationChecker $authorizationChecker) {
        $this->router = $router;
        $this->authorizationChecker = $authorizationChecker;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {

        $response = null;

        if ($this->authorizationChecker->isGranted('ROLE_ADMIN')) {
            $response = new RedirectResponse($this->router->generate('dashboard'));
        } else if ($this->authorizationChecker->isGranted('ROLE_CUSTUMER')) {
            $response = new RedirectResponse($this->router->generate('custumer_dashboard'));
        } else if ($this->authorizationChecker->isGranted('ROLE_PRESTATAIRE')) {
            $response = new RedirectResponse($this->router->generate('prestatire_dashboard'));
        } else if ($this->authorizationChecker->isGranted('ROLE_PARTENAIRE')) {
            $response = new RedirectResponse($this->router->generate('partenaire_dashboard'));
        }

        return $response;
    }

}
