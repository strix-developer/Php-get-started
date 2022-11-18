 <?php
    require_once __DIR__ . "/helper.php";

    if (isset($_POST['action'])) {  // checking if variable is declared and is not null
        require_once action($_POST['action']);
    }
