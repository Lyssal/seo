<?php
/**
 * This file is part of a Lyssal project.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\Seo\Model;

/**
 * Always use this interface when you add a page property in your entity.
 */
interface PageableInterface
{
    /**
     * Get the page;
     *
     * @return \Lyssal\Seo\Model\Page The page
     */
    public function getPage(): ?Page;

    /**
     * Get the pattern to use for generate the slug.
     *
     * @return string The slug pattern
     */
    public function getPatternForSlug();

    /**
     * Return if the slug can be generated.
     *
     * @return bool If the slug can be generated
     */
    public function canGenerateSlug();
}
