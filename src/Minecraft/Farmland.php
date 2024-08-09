<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class Farmland extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('farmland_moist');
    }
}
