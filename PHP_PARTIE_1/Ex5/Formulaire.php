Bonjour <?php echo htmlspecialchars($_POST['nom']); ?>.
Vous avez <?php echo (int)$_POST['age']; ?> ans.
<?php
echo('<link rel="stylesheet" href="PhPEx5.css" type="text/css">');
highlight_file(__FILE__);