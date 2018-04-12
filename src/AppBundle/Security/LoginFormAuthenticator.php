<?php
/**
 * Created by PhpStorm.
 * User: m.pevnev
 * Date: 12.4.18
 * Time: 18.42
 */

namespace AppBundle\Security;


use AppBundle\Form\LoginForm;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;

class LoginFormAuthenticator extends AbstractFormLoginAuthenticator
{
    private $formFactory;

    public function __construct(FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    public function getCredentials(Request $request)
    {
        $isLoginSubmit = $request->getPathInfo() == '/login' && $request->isMethod('POST');

        if (!$isLoginSubmit) {
            return;
        }

        $form = $this->formFactory->create(LoginForm::class);
        $form->handleRequest($request);
        $date = $form->getData();

        return $date;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        // TODO: Implement getUser() method.
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        // TODO: Implement checkCredentials() method.
    }

    protected function getLoginUrl()
    {
        // TODO: Implement getLoginUrl() method.
    }

    protected function getDefaultSuccessRedirectUrl()
    {
        // TODO: Implement getLoginUrl() method.
    }
}