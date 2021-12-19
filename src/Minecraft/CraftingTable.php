<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CraftingTable extends Block
{
    protected $name = 'minecraft:crafting_table';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('crafting_table_top');
    }
}
