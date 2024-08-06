<?php
namespace Bastelbot\McBlock\Abstract;

class BlockGrey extends Block
{
    protected function color2rgba ($color)
    {
        $rgba = array();
        $rgba['a'] = ($color >> 24) & 0xFF;
        $rgba['r'] = ($color >> 16) & 0xFF;
        $rgba['g'] = ($color >> 8) & 0xFF;
        $rgba['b'] = $color & 0xFF;
        return $rgba;
    }

    protected function rgba2color ($rgba)
    {
        return ($rgba['a'] << 24) | ($rgba['r'] << 16) | ($rgba['g'] << 8) | $rgba['b'];
    }

    protected function imagecolorize ($im, $color)
    {
        $color = $this->color2rgba($color);
        for($y=0; $y<imagesy($im); $y++) {
            for($x=0; $x<imagesx($im); $x++) {

                $c = $this->color2rgba(imagecolorat($im, $x, $y));
                $c['r'] = ($c['r'] * $color['r']) >> 8;
                $c['g'] = ($c['g'] * $color['g']) >> 8;
                $c['b'] = ($c['b'] * $color['b']) >> 8;

                imagesetpixel($im, $x, $y, $this->rgba2color($c));
            }
        }
    }

    protected function toTrueColor ($img, $destroy=false)
    {
        if(!$img) return $img;
        $im = $this->getEmptyImg();
        imagecopy($im, $img, 0, 0, 0, 0, 16, 16);
        if($destroy) imagedestroy($img);
        return $im;
    }

    public function loadTexture ($file='', $rot=0)
    {
        $im = parent::loadTexture($file, $rot);
        return $this->toTrueColor($im, true);
    }
}
