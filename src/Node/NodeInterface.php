<?php

/**
 * This file is part of the contentful/structured-text-renderer package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\StructuredText\Node;

/**
 * NodeInterface.
 *
 * A class implementing this interface represents a node,
 * which is the core unit of structured text content.
 * A node can represent text, a list, a paragraph, a full document, etc.
 */
interface NodeInterface extends \JsonSerializable
{
    /**
     * Returns the internal type of a node object.
     *
     * @return string
     */
    public static function getType(): string;
}