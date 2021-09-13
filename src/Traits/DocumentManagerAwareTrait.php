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

use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Contracts\Service\Attribute\Required;

trait DocumentManagerAwareTrait
{
    protected DocumentManager $documentManager;

    #[Required]
    public function setDocumentManager(DocumentManager $documentManager): void
    {
        $this->documentManager = $documentManager;
    }
}
