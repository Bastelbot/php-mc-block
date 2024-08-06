<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class StrippedBirchWood extends Block
{
    protected $name = 'minecraft:stripped_birch_wood';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stripped_birch_log_top');
    }
}
