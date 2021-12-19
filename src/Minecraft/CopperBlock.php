<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CopperBlock extends Block
{
    protected $name = 'minecrafte:copper_block';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('copper_block');
    }
}
