<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BambooSlab extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('bamboo_planks');
    }
}
