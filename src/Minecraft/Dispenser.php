<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class Dispenser extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('dispenser_front');
    }
}
