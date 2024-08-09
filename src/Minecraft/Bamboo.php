<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class Bamboo extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('bamboo_stalk');
    }
}
