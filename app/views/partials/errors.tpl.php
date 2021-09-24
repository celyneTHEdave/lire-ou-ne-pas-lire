
<?php if (isset($errorList)) : ?>
    <?php foreach ($errorList as $currentError) : ?>
        <div class="alert alert-danger" role="alert"><?= $currentError; ?></div>
    <?php endforeach; ?>
<?php endif; ?>
