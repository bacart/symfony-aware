<?php

/**
 * @noinspection PhpUnused
 */

declare(strict_types=1);

/*
 * This file is part of the Bacart package.
 *
 * (c) Alex Bacart <alex@bacart.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bacart\SymfonyAware\Traits;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Contracts\Service\Attribute\Required;

trait ClientRegistryAwareTrait
{
    protected ClientRegistry $clientRegistry;

    #[Required]
    public function setClientRegistry(ClientRegistry $clientRegistry): void
    {
        $this->clientRegistry = $clientRegistry;
    }
}
