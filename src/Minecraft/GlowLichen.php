<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class GlowLichen extends Block
{
    protected $name = 'minecraft:glow_lichen';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->getEmptyImg();
    }
}
