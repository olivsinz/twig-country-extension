<?php

namespace Olivers\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

use Symfony\Component\Intl\Intl;

/**
 *
 * This Twig extension to convert two letter country to country name.
 *
 * See https://symfony.com/doc/current/cookbook/templating/twig_extension.html
 */
class CountryExtension extends AbstractExtension
{

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            new TwigFilter('country', array($this, 'countryFilter')),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function countryFilter($countryCode, $displayLocale = null)
    {
        return Intl::getRegionBundle()->getCountryName($countryCode, $displayLocale);
    }
}
