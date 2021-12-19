<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Lectern extends Block
{
    protected $name = 'minecraft:lectern';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->getEmptyImg();
    }
}
