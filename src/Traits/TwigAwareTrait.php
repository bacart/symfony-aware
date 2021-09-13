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

use Symfony\Contracts\Service\Attribute\Required;
use Twig\Environment;

trait TwigAwareTrait
{
    protected Environment $twig;

    #[Required]
    public function setTwig(Environment $twig): void
    {
        $this->twig = $twig;
    }
}
