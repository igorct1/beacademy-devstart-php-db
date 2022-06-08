<?php

use App\Controller;

?>
<div class="alert alert-success mt-3">
    <?php echo $message; 
    $url = explode("/", $_SERVER['REQUEST_URI']);
    $url = $url[1];
    ?>
    <a href="<?php echo "/{$url}";?>"class="btn btn-outline-dark">Ok</a>
</div>