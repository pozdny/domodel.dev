<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 12.05.2015
 * Time: 17:18
 */
use yii\widgets\ContentDecorator;
?>
<?php ContentDecorator::begin([
    'viewFile' => '@app/views/layouts/main.php',
    'params' => [],
    'view' => $this,
]) ?>
    <div class="col-xs-4">
        <aside>
            <?php
            echo '123';

            ?>
        </aside><!-- sidebar -->
    </div>
    <div class="col-xs-8 last">
        <h1></h1>
        <?php echo $content; ?>

    </div>
<?php ContentDecorator::end() ?>
