<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class FletchingTable extends Block
{
    protected $name = 'minecraft:fletching_table';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('fletching_table_top');
    }
}
