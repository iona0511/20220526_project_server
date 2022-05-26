<?php require __DIR__ . '/parts/connect_db.php'; 
// 以下是資料新增的方式

// SQL通常用“” ，因為裡面的值通常都是‘’
// PR key不用給

// 如果資料是從user端給的, 就不要用這sql的方式寫死!!!!
// $sql = "INSERT INTO `menu`(`menu_categories`, `menu_photo`, `menu_name`, `menu_kcal`, `menu_price_m`, `menu_price_l`, `menu_nutrition`, `created_at`) VALUES ('經典義式系列','','咖啡拿鐵 (冰)','381.4','70','90','',NOW())";

// $stmt = $pdo->query($sql);


// 避免SQL injection(SQL 隱碼攻擊)
// 外來的資料有可能包含單引號 ,會破壞語法 ,所以用問號 ,問號不用加上單引號
// 如果資料是從user端給的, 就用以下的方式把資料匯入sql!!
// 如果資料是從user端給的，一律用prepare搭配execute!!例如會員新增訂單
$sql = "INSERT INTO `menu`(`menu_categories`, `menu_photo`, `menu_name`, `menu_kcal`, `menu_price_m`, `menu_price_l`, `menu_nutrition`, `created_at`) VALUES (?,?,?,?,?,?,?,NOW())";

$stmt = $pdo->prepare($sql);
$stmt ->execute(['經典義式系列3','','咖啡拿鐵 (冰)','381.4','70','90','']);

// execute會主動將陣列裡的字元做跳脫
// rowCount() 會拿到stmt新增的筆數
echo $stmt->rowCount();