<?php
/**
 * This file is part of a Lyssal project.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\Seo\Model;

/**
 * A website.
 */
class Website
{
    /**
     * @var string The title
     */
    protected $title;

    /**
     * @var \Lyssal\Seo\Model\Page The home page
     */
    protected $homePage;

    /**
     * @var string The author
     */
    protected $author;

    /**
     * @var string The publisher
     */
    protected $publisher;

    /**
     * @var string The copyright
     */
    protected $copyright;

    /**
     * @var string The used softwares
     */
    protected $generator;

    /**
     * @var string The reply address
     */
    protected $replyTo;


    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getHomePage(): ?Page
    {
        return $this->homePage;
    }

    public function setHomePage(?Page $homePage): self
    {
        $this->homePage = $homePage;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(?string $publisher): self
    {
        $this->publisher = $publisher;

        return $this;
    }

    public function getCopyright(): ?string
    {
        return $this->copyright;
    }

    public function setCopyright(?string $copyright): self
    {
        $this->copyright = $copyright;

        return $this;
    }

    public function getGenerator(): ?string
    {
        return $this->generator;
    }

    public function setGenerator(?string $generator): self
    {
        $this->generator = $generator;

        return $this;
    }

    public function getReplyTo(): ?string
    {
        return $this->replyTo;
    }

    public function setReplyTo(?string $replyTo): self
    {
        $this->replyTo = $replyTo;

        return $this;
    }


    /**
     * Get the title.
     *
     * @return string The title
     */
    public function __toString()
    {
        return (string) $this->title;
    }
}
