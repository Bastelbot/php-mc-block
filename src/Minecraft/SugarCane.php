<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SugarCane extends Block
{
    protected $name = 'minecraft:sugar_cane';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('sugar_cane');
    }
}
