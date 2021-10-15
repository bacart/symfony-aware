<?php

declare(strict_types=1);

/*
 * This file is part of the Bacart package.
 *
 * (c) Alex Bacart <alex@bacart.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bacart\SymfonyAware\Interfaces;

use Symfony\Component\Mercure\Authorization;

interface MercureAuthorizationAwareInterface
{
    public function setMercureAuthorization(Authorization $mercureAuthorization): void;
}
