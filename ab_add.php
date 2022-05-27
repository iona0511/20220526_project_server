<?php require __DIR__ . '/parts/connect_db.php';
$pageName = 'ab_add';
$title = '新增菜單資料';

?>
<?php include __DIR__ . '/parts/html_menu_head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<style>
    .form-control.red {
        border: 1px solid red;
    }

    .form-text.red {
        color: red;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">新增資料</h5>
                    <form name="form1" onsubmit="sendData();return false;" novalidate>
                        <div class="mb-3">
                            <label for="menu_categories" class="form-label">種類</label>
                            <input type="text" class="form-control" id="menu_categories" name="menu_categories" required>
                            <div class="form-text red"></div>
                        </div>
                        <div class="mb-3">
                            <label for="menu_photo" class="form-label">圖片</label>
                            <input type="file" class="form-control" id="menu_photo" name="menu_photo">
                            <div class="form-text red"></div>
                        </div>
                        <div class="mb-3">
                            <label for="menu_name" class="form-label">名稱</label>
                            <input type="text" class="form-control" id="menu_name" name="menu_name">
                            <div class="form-text red"></div>
                        </div>
                        <div class="mb-3">
                            <label for="menu_kcal" class="form-label">熱量</label>
                            <input type="text" class="form-control" id="menu_kcal" name="menu_kcal">
                            <div class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="menu_price_m" class="form-label">價格(M)</label>
                            <input class="form-control" name="menu_price_m" id="menu_price_m" cols="30" rows="3"></input>
                            <div class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="menu_price_l" class="form-label">價格(L)</label>
                            <input class="form-control" name="menu_price_l" id="menu_price_l" cols="30" rows="3"></input>
                            <div class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="menu_nutrition" class="form-label">營養標示資訊</label>
                            <textarea class="form-control" name="menu_nutrition" id="menu_nutrition" cols="30" rows="3"></textarea>
                            <div class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="created_at" class="form-label">建立日期</label>
                            <input type="datetime"class="form-control" name="created_at" id="created_at" cols="30" rows="3"></input>
                            <div class="form-text"></div>
                        </div>


                        <button type="submit" class="btn btn-primary">新增</button>
                    </form>
                    <div id="info-bar" class="alert alert-success" role="alert" style="display:none;">
                        資料新增成功
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include __DIR__ . '/parts/scripts.php' ?>
<script>
    async function sendData(){
        const fd = new FormData(document.form1);
        const r = await fetch ('ab_add_api.php',{
            method : 'POST',
            body : fd ,
        });
        const result = r.json();
        console.log(result);
    }







    // const email_re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zAZ]{2,}))$/;
    // const menu_name_re = /^09\d{2}-?\d{3}-?\d{3}$/;

    // const info_bar_f = document.querySelector('#info-bar');
    // const menu_categories_f = document.form1.menu_categories;
    // const menu_photo_f = document.form1.menu_photo;
    // const menu_name_f = document.form1.menu_name;
    // const menu_kcal_f	= document.form1.menu_kcal	;
    // const menu_price_m_f = document.form1.menu_price_m;
    // const menu_price_l_f = document.form1.menu_price_l;
    // const menu_nutrition_f = document.form1.menu_nutrition;
    // const created_at_f = document.form1.created_at;

    // const fields = [info_bar_f,menu_categories_f,menu_photo_f,menu_name_f,menu_kcal_f,menu_price_m_f,menu_price_l_f,menu_nutrition_f,created_at_f]

    // const fieldText = [];
    // for(let f of fields){
    //     fieldText.push(f.nextElementSibiling);
    // }

    // // const name_f = document.form1.name;
    // // const email_f = document.form1.email;
    // // const menu_name_f = document.form1.menu_name	;

    // // const fields = [name_f, email_f, menu_name_f];
    // // const fieldTexts = [];
    // // for (let f of fields) {
    // //     fieldTexts.push(f.nextElementSibling);
    // // }



    // async function sendData() {
    //     // 讓欄位的外觀回復原來的狀態
    //     for (let i in fields) {
    //         fields[i].classList.remove('red');
    //         fieldTexts[i].innerText = '';
    //     }
    //     info_bar.style.display = 'none'; // 隱藏訊息列

    //     // TODO: 欄位檢查, 前端的檢查
    //     let isPass = true; // 預設是通過檢查的

    //     if (name_f.value.length < 2) {
    //         // alert('姓名至少兩個字');
    //         // name_f.classList.add('red');
    //         // name_f.nextElementSibling.classList.add('red');
    //         // name_f.closest('.mb-3').querySelector('.form-text').classList.add('red');
    //         fields[0].classList.add('red');
    //         fieldTexts[0].innerText = '姓名至少兩個字';
    //         isPass = false;
    //     }
    //     if (email_f.value && !email_re.test(email_f.value)) {
    //         // alert('email 格式錯誤');
    //         fields[1].classList.add('red');
    //         fieldTexts[1].innerText = 'email 格式錯誤';
    //         isPass = false;
    //     }
    //     if (menu_name_f.value && !menu_name_re.test(menu_name_f.value)) {
    //         // alert('手機號碼格式錯誤');
    //         fields[2].classList.add('red');
    //         fieldTexts[2].innerText = '手機號碼格式錯誤';
    //         isPass = false;
    //     }

    //     if (!isPass) {
    //         return; // 結束函式
    //     }

    //     const fd = new FormData(document.form1);
    //     const r = await fetch('ab_add_api.php', {
    //         method: 'POST',
    //         body: fd,
    //     });
    //     const result = await r.json();
    //     console.log(result);
    //     info_bar.style.display = 'block'; // 顯示訊息列
    //     if (result.success) {
    //         info_bar.classList.remove('alert-danger');
    //         info_bar.classList.add('alert-success');
    //         info_bar.innerText = '新增成功';

    //         setTimeout(() => {
    //             // location.href = 'ab-list.php'; // 跳轉到列表頁
    //         }, 2000);
    //     } else {
    //         info_bar.classList.remove('alert-success');
    //         info_bar.classList.add('alert-danger');
    //         info_bar.innerText = result.error || '資料無法新增';
    //     }

    // }
</script>
<?php include __DIR__ . '/parts/html_menu_foot.php' ?>












