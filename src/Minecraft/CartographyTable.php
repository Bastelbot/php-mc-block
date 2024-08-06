<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CartographyTable extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('cartography_table_top');
    }
}
