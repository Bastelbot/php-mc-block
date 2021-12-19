<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BeeNest extends Block
{
    protected $name = 'minecraft:bee_nest';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('bee_nest_front');
    }
}
