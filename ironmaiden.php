<?php
require 'array.php';
include 'header.php';
$page = $datas[$_GET['page'] ?? "Iron-Maiden"];
?>

<div class="container theme-showcase" role="main">
    <div class="jumbotron">
        <h1><?php echo $page["title"]?> </h1>
        <p><?php echo $page["content"]?></p>
        <span class="<?php echo $page["span"]?>"><?php echo $page["spanContent"]?></span>
    </div>
    <img class="img-thumbnail" alt="<?php echo $page["image"]["alt"]?>" src="<?php echo $page["image"]["link"]?>" data-holder-rendered="true">
</div>
<?php
include 'footer.php';
?>
