<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Repeater extends Block
{
    protected $name = 'minecraft:repeater';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('repeater_on');
    }
}
