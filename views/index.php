<?php
use yii\helpers\Html;
use widgets\palettecolors\Assets;
$bundle = Assets::register($this);
?>

<div class="colors">
    <div class="automatic">
        <div class="color" style="background-color: #000000;"></div><span>Automatic</span>
    </div>
    <div class="title">Theme Colors</div>
    <div class="colors-row">
    <?php foreach($colors['theme-colors'] as $color): ?>
        <?= Html::tag("div", null, [
            "style" => "background-color: " . $color,
            "class" => "color",
        ]) ?>
    <?php endforeach; ?>
    </div>
    <div class="colors-row">
    <?php foreach($colors['detail-colors'] as $color): ?>
        <div class="colors-column">
        <?php foreach($color as $c): ?>
            <?= Html::tag("div", null, [
                "style" => "background-color: " . $c,
                "class" => "color",
            ]) ?>
        <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
    </div>
    <div class="title">Standard Colors</div>
    <div class="colors-row">
    <?php foreach($colors['standard-colors'] as $color): ?>
        <?= Html::tag("div", null, [
            "style" => "background-color: " . $color,
            "class" => "color",
        ]) ?>
    <?php endforeach; ?>
    </div>
</div>