<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Tests\Doctrine\Odm\PropertyInfo\Fixtures;

use Doctrine\ODM\MongoDB\Mapping\Annotations\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations\EmbedMany;
use Doctrine\ODM\MongoDB\Mapping\Annotations\EmbedOne;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;

/**
 * @author Alan Poulain <contact@alanpoulain.eu>
 */
#[Document]
class DoctrineWithEmbedded
{
    #[Id]
    public $id;

    #[EmbedOne(targetDocument: DoctrineEmbeddable::class)]
    protected $embedOne;

    #[EmbedMany(targetDocument: DoctrineEmbeddable::class)]
    protected $embedMany;

    #[EmbedMany]
    protected $embedManyOmittingTargetDocument;
}
