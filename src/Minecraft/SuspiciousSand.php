<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class SuspiciousSand extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('suspicious_sand_2');
    }
}
