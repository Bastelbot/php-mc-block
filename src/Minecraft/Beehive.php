<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Beehive extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('beehive_side');
    }
}
