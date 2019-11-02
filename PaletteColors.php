<?php

namespace widgets\palettecolors;

/**
 * This is just an example.
 */
class PaletteColors extends \yii\base\Widget
{
    public function run()
    {
        return $this->render('index', [
            'colors' => [
                'theme-colors' => ['#ffffff','#000000','#727272','#2b142d','#92bc00','#c98c22','#65d6ff','#d39bc8','#c00000','#ffff00'],
                'detail-colors' => [
                    ['#f2f2f2','#d8d8d8','#bfbfbf','#a5a5a5','#7f7f7f'],
                    ['#7f7f7f','#595959','#3f3f3f','#262626','#0c0c0c'],
                    ['#e2e2e2','#c6c6c6','#aaaaaa','#555555','#393939'],
                    ['#efe0f1','#d9b1dc','#b364ba','#74367a','#48214b'],
                    ['#f0ffbe','#e2ff7e','#d3ff3d','#6d8d00','#6d8d00'],
                    ['#f7e8cf','#efd2a0','#e7bc71','#966919','#644610'],
                    ['#e0f6ff','#c1eeff','#a2e6ff','#0bbeff','#0082b2'],
                    ['#f6ebf4','#edd7e9','#e4c2de','#b75ba5','#7f3771'],
                    ['#ffbfbf','#ff7f7f','#ff4040','#900000','#600000'],
                    ['#ffffcc','#fffe99','#ffff65','#bfbf00','#7f7f00'],
                ],
                'standard-colors'=> ['#c00000','#ff0000','#ffc000','#ffff00','#92d050','#00b050','#00b0f0','#0070c0','#002060','#7030a0'],
            ],
        ]);
    }
}
