<div>
    <?php require __DIR__ . '/parts/connect_db.php';
    exit; // 關閉功能
    echo microtime(true) . "<br>";

    $lname = ['美式', '義式', '精品'];
    $fname = ['咖啡', '拿鐵'];


    $sql = "INSERT INTO `menu`(`menu_categories`, `menu_photo`, `menu_name`, `menu_kcal`, `menu_price_m`, `menu_price_l`, `menu_nutrition`, `created_at`) VALUES (?,?,?,?,?,?,?,NOW())";

    $stmt = $pdo->prepare($sql);
    // shuffle是隨機排序 
    for ($i = 0; $i < 10; $i++) {
        shuffle($lname);
        shuffle($fname);
        $stmt->execute(['咖啡','',$lname[0] . $fname[0],'1'.rand(10, 99),$i,120,'09'.rand(400,999)]);
    }
    echo microtime(true) . "<br>";
    ?>
 
</div>