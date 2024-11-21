<?php
declare(strict_types=1);

namespace SimpleSoftwareIO\QrCode\CustomEyes;

use BaconQrCode\Renderer\Eye\EyeInterface;
use BaconQrCode\Renderer\Path\Path;

/**
 * Renders the eyes with a circle shape.
 */
final class CircleEye implements EyeInterface
{
    private static ?CircleEye $instance = null;

    private function __construct()
    {
    }

    public static function instance() : self
    {
        return self::$instance ?: self::$instance = new self();
    }

    public function getExternalPath() : Path
    {
        return (new Path())
            ->move(3.5, 0)
            ->ellipticArc(3.5, 3.5, 0., false, true, 0., 3.5)
            ->ellipticArc(3.5, 3.5, 0., false, true, -3.5, 0.)
            ->ellipticArc(3.5, 3.5, 0., false, true, 0., -3.5)
            ->ellipticArc(3.5, 3.5, 0., false, true, 3.5, 0.)
            ->close()
            ->move(2.5, 0)
            ->ellipticArc(2.5, 2.5, 0., false, true, 0., 2.5)
            ->ellipticArc(2.5, 2.5, 0., false, true, -2.5, 0.)
            ->ellipticArc(2.5, 2.5, 0., false, true, 0., -2.5)
            ->ellipticArc(2.5, 2.5, 0., false, true, 2.5, 0.)
            ->close()
        ;
    }

    public function getInternalPath() : Path
    {
        return (new Path())
            ->move(1.5, 0)
            ->ellipticArc(1.5, 1.5, 0., false, true, 0., 1.5)
            ->ellipticArc(1.5, 1.5, 0., false, true, -1.5, 0.)
            ->ellipticArc(1.5, 1.5, 0., false, true, 0., -1.5)
            ->ellipticArc(1.5, 1.5, 0., false, true, 1.5, 0.)
            ->close()
        ;
    }
}
