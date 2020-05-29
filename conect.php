<?php
if(isset($_POST['save'])) {
    include 'save_form.php';
} 

elseif(isset($_POST['view'])) {
    include 'view_data.php';

} 
elseif(isset($_POST['edit'])) {
    include 'update_data.php';

} 
elseif(isset($_POST['remove'])) {
    include 'del_data.php';
}
?>