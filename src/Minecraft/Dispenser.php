<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Dispenser extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('dispenser_front');
    }
}
