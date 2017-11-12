<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 11.11.2017
 * Time: 15:44
 */
?>
    <? if (count($model)){ ?>
        <? foreach ($model as $item){ ?>
            <div class = "well">
                <h3><?=$item->title?></h3>
                <p><?=$item->description?></p>
            </div>
    <?  }
    } ?>
