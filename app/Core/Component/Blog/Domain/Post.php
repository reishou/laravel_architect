<?php

namespace App\Core\Component\Blog\Domain;

use DateTimeImmutable;
use Extension\DateTime\DateTimeGenerator;
use Serializable;

/**
 * Class Post
 *
 * @package App\Core\Component\Blog\Domain
 */
class Post implements Serializable
{
    /**
     * @var PostId
     */
    private PostId $id;
    /**
     * @var string
     */
    private string $title;
    /**
     * @var string
     */
    private string $slug;
    /**
     * @var string
     */
    private string $summary;
    /**
     * @var string
     */
    private string $content;
    /**
     * @var DateTimeImmutable
     */
    private DateTimeImmutable $publishedAt;
    /**
     * @var bool
     */
    private bool $isNewPost = false;

    /**
     * Post constructor.
     */
    public function __construct()
    {
        $this->id          = new PostId();
        $this->publishedAt = DateTimeGenerator::generate();
        $this->isNewPost   = true;
    }

    /**
     * @return string|void|null
     */
    public function serialize()
    {
        // TODO: Implement serialize() method.
    }

    /**
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }
}
