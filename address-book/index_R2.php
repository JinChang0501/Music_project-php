<?php
if (!isset($_SESSION)) {
    session_start();
}


$title = '首頁';
$pageName = 'home';
?>
<style>
    .container-85 {
        width: 85%;
        margin: auto;
    }
</style>



<?php include __DIR__ . "/part/html-header.php"; ?>


<div class="container-85 mt-3 p-2" style="background-color: #7B7B7B;">
    <h1>Home</h1>
</div>
<?php include __DIR__ . "/part/navbar-R2.php"; ?>

<?php include __DIR__ . "/part/scripts.php"; ?>
<?php include __DIR__ . "/part/html-footer.php"; ?>