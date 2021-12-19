<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class ExposedCopper extends Block
{
    protected $name = 'minecrafte:exposed_copper';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('exposed_copper');
    }
}
