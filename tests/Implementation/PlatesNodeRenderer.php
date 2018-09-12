<?php

/**
 * This file is part of the contentful/structured-text-renderer package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\Tests\StructuredText\Implementation;

use Contentful\StructuredText\Node\NodeInterface;
use Contentful\StructuredText\NodeRenderer\NodeRendererInterface;
use Contentful\StructuredText\RendererInterface;
use League\Plates\Engine;

/**
 * Basic implementation of NodeRendererInterface for testing purposes.
 *
 * This implementation demonstrates how delegating
 * to an actual templating engine might work.
 */
class PlatesNodeRenderer implements NodeRendererInterface
{
    /**
     * @var Engine
     */
    private $plates;

    public function __construct(Engine $plates)
    {
        $this->plates = $plates;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(NodeInterface $node): bool
    {
        return \true;
    }

    /**
     * {@inheritdoc}
     */
    public function render(RendererInterface $renderer, NodeInterface $node, array $context = []): string
    {
        return $this->plates->render('template', [
            'name' => $node->getType(),
            'contextVar' => $context['contextVar'],
        ]);
    }
}