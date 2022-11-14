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

use Doctrine\Common\Annotations\Reader;
use Symfony\Contracts\Service\Attribute\Required;

trait ReaderAwareTrait
{
    protected Reader $reader;

    #[Required]
    public function setReader(Reader $reader): void
    {
        $this->reader = $reader;
    }
}
