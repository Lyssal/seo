<?php
/**
 * This file is part of a Lyssal project.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\Seo\Model\Traits;

use Lyssal\Seo\Model\Page;

/**
 * A trait to use to add a Page property in your model.
 * You have to manually add the page property.
 */
trait PageTrait
{
    /**
     * @see \Lyssal\Seo\Model\PageableInterface::getPage()
     */
    public function getPage(): ?Page
    {
        return $this->page;
    }

    public function setPage(?Page $page): self
    {
        $this->page = $page;

        return $this;
    }


    /**
     * @see \Lyssal\Seo\Model\PageableInterface::getPatternForSlug()
     */
    public function getPatternForSlug()
    {
        return $this->page->getTitle();
    }

    /**
     * @see \Lyssal\Seo\Model\PageableInterface::canGenerateSlug()
     */
    public function canGenerateSlug()
    {
        return null === $this->page->getSlug() && $this->page->isOnline();
    }
}
