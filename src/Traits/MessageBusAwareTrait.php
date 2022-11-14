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

use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Contracts\Service\Attribute\Required;

trait MessageBusAwareTrait
{
    protected MessageBusInterface $messageBus;

    #[Required]
    public function setMessageBusBus(MessageBusInterface $messageBus): void
    {
        $this->messageBus = $messageBus;
    }
}
