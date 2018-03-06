<div class="form">
    <?php echo CHtml::errorSummary($model); ?>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'Your Name'); ?>
        <?php echo CHtml::activeTextField($model,'regname') ?>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'Your Password'); ?>
        <?php echo CHtml::activePasswordField($model,'regpass') ?>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'Email Address'); ?>
        <?php echo CHtml::activePasswordField($model,'regemail') ?>
    </div>
    <div class="row">
        <?php echo CHtml::activeLabel($model,'Contact'); ?>
        <?php echo CHtml::activePasswordField($model,'regcontact') ?>
    </div>

    <div class="row submit">
        <?php echo CHtml::submitButton('Login'); ?>
    </div>
</div>