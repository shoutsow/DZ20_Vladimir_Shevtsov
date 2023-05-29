<?php

require_once './header.php';

require_once './pagesData.php';

?>

<?php

if (!empty($_GET['pid']) && !empty($pagesData)) {
    echo $pagesData[$_GET['pid']];
}

?>

<?php

require_once './footer.php';

require_once './copy.php';

?>  