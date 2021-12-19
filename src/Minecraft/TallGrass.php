<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class TallGrass extends BlockGrey
{
    protected $name = 'minecraft:tall_grass';
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('tall_grass_top');
        $this->imagecolorize($tex, 0x006fb050);
        return $tex;
    }
}
