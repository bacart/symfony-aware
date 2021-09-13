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

namespace Bacart\SymfonyAware\Traits;

use Symfony\Component\Lock\LockFactory;
use Symfony\Contracts\Service\Attribute\Required;

trait LockFactoryAwareTrait
{
    protected LockFactory $lockFactory;

    #[Required]
    public function setLockFactory(LockFactory $lockFactory): void
    {
        $this->lockFactory = $lockFactory;
    }
}
