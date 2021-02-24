<?php

namespace BeHappy\SyliusRightsManagementPlugin\Security;


use Sylius\Bundle\ResourceBundle\Controller\RequestConfiguration;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class IsResourceGranted
 * @package BeHappy\SyliusRightsManagementPlugin\Security
 */
class IsResourceGranted implements VoterInterface
{
    public function isGranted(Request $request, TokenStorageInterface $user): bool
    {
        # TODO validate on the request resource if have the same channel as the authenticated user
        dd($request, $user);
    }
}
