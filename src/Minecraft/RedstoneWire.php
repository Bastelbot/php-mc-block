<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\BlockGrey;

class RedstoneWire extends BlockGrey
{
    protected $name = 'minecraft:redstone_wire';
    protected $transparent = true;

    public function initTexture ()
    {
        $tex = $this->loadTexture('redstone_dust_dot');
        $this->imagecolorize($tex, 0x00ff0000);
        return $tex;
    }
}
