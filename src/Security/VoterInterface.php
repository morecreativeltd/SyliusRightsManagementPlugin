<?php

namespace BeHappy\SyliusRightsManagementPlugin\Security;

use Sylius\Bundle\ResourceBundle\Controller\RequestConfiguration;

/**
 * Interface VoterInterface
 * @package BeHappy\SyliusRightsManagementPlugin\Security
 */
interface VoterInterface
{
    /**
     * @return mixed
     */
    public function isGranted(RequestConfiguration $configuration, string $permission): bool;
}
