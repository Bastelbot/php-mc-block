<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class BeeNest extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('bee_nest_front');
    }
}
