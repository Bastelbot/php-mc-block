<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Observer extends Block
{
    protected $name = 'minecraft:observer';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('observer_back_on');
    }
}
