<?php require __DIR__ . '/parts/connect_db.php'; 

// intval 轉換成整數就不會有sql injection的問題
$menu_sid = isset($_GET['menu_sid']) ? intval($GET['menu_sid']) : 0;
if(!empty($menu_sid)){
    $pdo->query("DELETE FROM `menu` WHERE sid = $menu_sid");
};

header('Location:ab_list.php');