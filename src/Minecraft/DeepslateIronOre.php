<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DeepslateIronOre extends Block
{
    protected $name = 'minecraft:deepslate_iron_ore';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('deepslate_iron_ore');
    }
}
