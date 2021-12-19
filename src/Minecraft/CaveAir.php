<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CaveAir extends Block
{
    protected $name = 'minecraft:cave_air';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->getEmptyImg();
    }
}
