<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Smoker extends Block
{
    protected $name = 'minecraft:smoker';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('smoker_front');
    }
}
