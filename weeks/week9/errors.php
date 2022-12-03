<?php
// count errors with foreach loop
if(count($errors) > 0) :?>
    <div class="error">
        <?php foreach($errors as $error) :?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
<!--end error div-->
<?php endif; ?>