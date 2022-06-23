<?php

declare(strict_types=1);

namespace Gutocf\Test\FontAwesome\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Gutocf\FontAwesome\View\Helper\FontAwesomeHelper;

class FontAwesomeHelperTest extends TestCase
{
    private FontAwesomeHelper $helper;

    public function setUp(): void
    {
        $this->helper = new FontAwesomeHelper(new View());
    }

    public function testIcon(): void
    {
        $this->assertEquals('<i class="fas fa-gear"></i>', $this->helper->icon('gear'));
        $this->assertEquals('<i class="far fa-gear"></i>', $this->helper->icon('gear', 'far'));
    }

    public function testFixedWidth(): void
    {
        $this->assertEquals('<i class="fas fa-gear fa-fw"></i>', $this->helper->fixedWidth('gear'));
        $this->assertEquals('<i class="far fa-gear fa-fw"></i>', $this->helper->fixedWidth('gear', 'far'));
    }
}
