<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Poppy extends Block
{
    protected $name = 'minecraft:poppy';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('poppy');
    }
}
