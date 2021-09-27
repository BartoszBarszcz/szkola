<?php
 //print_r($_POST);

if (!empty($_POST['name']) && !empty($_POST['figure'])) {
    switch ($_POST['figure']) {
        case 'kwadrat':
            header('location: sqer.php');
            break;
        case 'prostokat':
            echo 'prostokąt';
            break;
        
       
    }
}else{
    ?>
        <script>
            history.back();
        </script>
    <?php
}

?>