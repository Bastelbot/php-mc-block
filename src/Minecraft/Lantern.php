<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Lantern extends Block
{
    protected $name = 'minecraft:lantern';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->getEmptyImg();
    }
}
