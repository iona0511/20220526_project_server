<!DOCTYPE html>
<?php
$icechoice = [
    '1'=>'正常冰',
    '2'=>'少冰',
    '3'=>'去冰',
    '4'=>'常溫',
    '5'=>'熱',
];
$sugarchoice = [
    '6'=>'無糖',
    '7'=>'一分糖',
    '8'=>'半糖',
    '9'=>'七分糖',
    '10'=>'全糖',
]


?>


<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        

        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form name="form1"onsubmit="return false;">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">冰塊</label>
                            <!-- combobox -->
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="icechoice">
                                <option value="" selected disabled>-- 請選擇 --</option>
                            <?php foreach($icechoice as $k=> $v) : ?>
                                <option value="<?=$k?>"><?=$v?></option>
                            <?php endforeach;?> 
                            </select>
                        </div>  

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">甜度選擇</label>
                            <?php foreach($sugarchoice as $k => $v): ?>
                            <div class="form-check">
                                <!-- name跟id要一樣才會有相同的group -->
                                <input class="form-check-input" type="radio" name="sugarchoice" id="sugarchoice<?=$k?>" value="<?=$k?>"> 
                                <label class="form-check-label" for="sugarchoice<?=$k?>">
                                  <?=$v?>
                                </label>
                            </div>
                            <?php endforeach;?>    
                            
                        </div>  
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>


            
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
