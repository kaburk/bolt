<?php

namespace Bolt\Tests\Library;

use Bolt\Library;
use Bolt\Tests\BoltUnitTest;

/**
 * Class to test src/Library.
 *
 * @group legacy
 *
 * @author Ross Riley <riley.ross@gmail.com>
 */
class BoltLibraryTest extends BoltUnitTest
{
    public function testFormatFilesize()
    {
        $b = 300;
        $fix = Library::formatFilesize($b);
        $this->assertEquals('300 B', $fix);

        $k = 1027;
        $fix = Library::formatFilesize($k);
        $this->assertEquals('1.00 KiB', $fix);

        $m = 1048577;
        $fix = Library::formatFilesize($m);
        $this->assertEquals('1.00 MiB', $fix);
    }
}
