<?php
require_once 'base.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        if(isset($_SESSION['username'])){
            $context['username'] = $_SESSION['username'];
            $template = $twig->loadTemplate("accountInfo.phtml");
        } else {
            header("Location: /login.php");
            exit;
        }
        $template->display($context);
     ?>
</body>
</html>
