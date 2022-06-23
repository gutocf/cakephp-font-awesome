<?php

declare(strict_types=1);

namespace Gutocf\FontAwesome\View\Helper;

use Cake\View\Helper;
use Khill\FontAwesome\FontAwesome;

class FontAwesomeHelper extends Helper
{
    /**
     * Generates icon HTML
     *
     * @param string $icon Icon name without "fa-" prefix
     * @param string $style Icon style (fas, far, fal, fab)
     */
    public function icon(string $icon, string $style = 'fas'): string
    {
        $fa = new FontAwesome($icon, $style);

        return $fa->__toString();
    }

    /**
     * Generates fixed size icon HTML
     *
     * @param string $icon Icon name without "fa-" prefix
     * @param string $style Icon style (fas, far, fal, fab)
     */
    public function fixedWidth(string $icon, string $style = 'fas'): string
    {
        $fa = new FontAwesome($icon, $style);

        /** @phpstan-ignore-next-line */
        return $fa
            ->fixedWidth()
            ->__toString();
    }
}
