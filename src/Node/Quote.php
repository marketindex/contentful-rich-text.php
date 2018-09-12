<?php

/**
 * This file is part of the contentful/structured-text-renderer package.
 *
 * @copyright 2015-2018 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\StructuredText\Node;

class Quote implements NodeInterface
{
    /**
     * @var Paragraph[]
     */
    private $content = [];

    /**
     * Quote constructor.
     *
     * @param Paragraph[] $content
     */
    public function __construct(array $content)
    {
        $this->content = $content;
    }

    /**
     * @return Paragraph[]
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
        return 'quote';
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