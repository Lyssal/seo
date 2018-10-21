<?php
/**
 * This file is part of a Lyssal project.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\Seo\Model;

/**
 * A page.
 */
class Page
{
    /**
     * @var string The page is always modified
     */
    const FREQUENCY_ALWAYS = 'always';

    /**
     * @var string The page is hourly modified
     */
    const FREQUENCY_HOURLY = 'hourly';

    /**
     * @var string The page is daily modified
     */
    const FREQUENCY_DAILY = 'daily';

    /**
     * @var string The page is weekly modified
     */
    const FREQUENCY_WEEKLY = 'weekly';

    /**
     * @var string The page is monthly modified
     */
    const FREQUENCY_MONTHLY = 'monthly';

    /**
     * @var string The page is yearly modified
     */
    const FREQUENCY_YEARLY = 'yearly';

    /**
     * @var string The page is never modified
     */
    const FREQUENCY_NEVER = 'never';


    /**
     * @var \Lyssal\Seo\Model\Website
     */
    protected $website;

    /**
     * @var bool If the page is online
     */
    protected $online;

    /**
     * @var string The title
     */
    protected $title;

    /**
     * @var string The slug
     */
    protected $slug;

    /**
     * @var string The description
     */
    protected $description;

    /**
     * @var string The locale
     */
    protected $locale;

    /**
     * @var \DateTime The last modification date
     */
    protected $updatedAt;

    /**
     * @var bool If the page is indexed
     */
    protected $indexed;

    /**
     * @var bool If the page is followed
     */
    protected $followed;

    /**
     * @var string The modification frequency
     */
    protected $modificationFrequency;

    /**
     * @var int The priority from 0 (not important) to 100 (very important)
     */
    protected $priority;

    /**
     * @var string The category
     */
    protected $category;

    /**
     * @var string The author
     */
    protected $author;


    public function __construct()
    {
        $this->indexed = true;
        $this->followed = true;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWebsite(): ?Website
    {
        return $this->website;
    }

    public function setWebsite(?Website $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function isOnline(): ?bool
    {
        return $this->online;
    }

    public function setOnline(bool $online): self
    {
        $this->online = $online;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function isIndexed(): ?bool
    {
        return $this->indexed;
    }

    public function setIndexed(bool $indexed): self
    {
        $this->indexed = $indexed;

        return $this;
    }

    public function isFollowed(): ?bool
    {
        return $this->followed;
    }

    public function setFollowed(bool $followed): self
    {
        $this->followed = $followed;

        return $this;
    }

    public function getModificationFrequency(): ?string
    {
        return $this->modificationFrequency;
    }

    public function setModificationFrequency(?string $modificationFrequency): self
    {
        $this->modificationFrequency = $modificationFrequency;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

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


    /**
     * Get the title.
     *
     * @return string The title
     */
    public function __toString()
    {
        return (string) $this->title;
    }


    /**
     * Get the available frequencies.
     *
     * @return string[] The frequency labels
     */
    public static function getAvailableFrequencies()
    {
        return [
            self::FREQUENCY_ALWAYS,
            self::FREQUENCY_HOURLY,
            self::FREQUENCY_DAILY,
            self::FREQUENCY_WEEKLY,
            self::FREQUENCY_MONTHLY,
            self::FREQUENCY_YEARLY,
            self::FREQUENCY_NEVER
        ];
    }
}
