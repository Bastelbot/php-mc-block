<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OxeyeDaisy extends Block
{
    protected $name = 'minecraft:oxeye_daisy';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('oxeye_daisy');
    }
}
