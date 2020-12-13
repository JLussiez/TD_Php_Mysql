Bonjour <?php echo htmlspecialchars($_GET['nom']); ?>.
Vous avez <?php echo (int)$_GET['age']; ?> ans.
<?php
echo('<link rel="stylesheet" href="PhPEx6.css" type="text/css">');
highlight_file(__FILE__);