<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\TransparentBlock;

class Campfire extends TransparentBlock
{
    protected $name = 'minecraft:fire';

    public function initTexture ()
    {
        return $this->loadTexture('fire_0');
    }
}
