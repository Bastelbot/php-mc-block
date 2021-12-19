<?php
namespace McBlock\Abstract;

class BlockNotFound extends Block
{
    protected $name = 'unknown';
    protected $transparent = false;

    public function __construct ($id)
    {
        Log::error("Block $id nicht gefunden!");
    }

    public function initTexture ()
    {
        return $this->xTexture();
    }

    protected function xTexture ()
    {
        $im = imagecreatetruecolor(16, 16);
        imagesavealpha($im, true);          // bild hat alphakanal
        imagefill($im, 0, 0, 0x00FF00FF);   // fill with color
        // add outline
        imagerectangle($im, 0, 0, 15, 15, 0x00000000);
        return $im;
    }
}
