<?php
            if(isset($_GET['error'])){
                ?><div class="alert alert-danger container text-center"><?=urldecode($_GET['error'])?></div><?php
            }else if(isset($_GET['success'])){
                ?><div class="alert alert-success container text-center"><?=urldecode($_GET['success'])?></div><?php
            }
?>