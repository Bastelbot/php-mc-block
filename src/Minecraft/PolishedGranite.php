<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PolishedGranite extends Block
{
    protected $name = 'minecraft:polished_granite';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('polished_granite');
    }
}
