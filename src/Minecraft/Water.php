<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class Water extends BlockGrey
{
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('water_still');
        $this->imagecolorize($tex, 0x000D7DED);
        return $tex;
    }

    public function isWater ()
    {
        return true;
    }

}
