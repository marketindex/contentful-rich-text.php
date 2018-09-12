<?php

/**
 * This file is part of the contentful/structured-text-renderer package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\StructuredText;

use Contentful\StructuredText\Node\NodeInterface;

/**
 * RendererInterface.
 *
 * A class implementing this interface is responsible for
 * turning an object (or collection of objects) implementing NodeInterface
 * into a string. This is done possibly by delegating the actual rendering
 * to objects implementing NodeRendererInterface, for more fine-grained rendering.
 */
interface RendererInterface
{
    /**
     * Handles rendering of a node,
     * possibly delegating to a specific node renderer.
     *
     * @param NodeInterface $node    The node that will be rendered
     * @param array         $context Optionally, extra context variables which will be passed down to the node renderer
     *
     * @return string
     */
    public function render(NodeInterface $node, array $context = []): string;

    /**
     * Shortcut for rendering a collection of nodes.
     *
     * @param NodeInterface[] $nodes   The collection of nodes that will be rendered
     * @param array           $context Optionally, extra context variables which will be passed down to the node renderer
     *
     * @return string
     */
    public function renderCollection(array $nodes, array $context = []): string;
}