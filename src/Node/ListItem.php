<?php

/**
 * This file is part of the contentful/structured-text-renderer package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\StructuredText\Node;

class ListItem implements NodeInterface
{
    /**
     * @var NodeInterface[]
     */
    private $content = [];

    /**
     * ListItem constructor.
     *
     * @param NodeInterface[] $content
     */
    public function __construct(array $content)
    {
        $this->content = $content;
    }

    /**
     * @return NodeInterface[]
     */
    public function getContent(): array
    {
        return $this->content;
    }

    /**
     * {@inheritdoc}
     */
    public static function getType(): string
    {
        return 'list-item';
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array
    {
        return [
            'nodeType' => self::getType(),
            'content' => $this->content,
        ];
    }
}