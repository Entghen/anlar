<?php

$type = $_GET["type"];
$products = [
    [
        "AirPods i7S",
        [
            0,
            1,
        ],
        3600,
        "Очень хороший товар",
        "./assets/products/ap_i7.jpg",
    ],
    [
        "JBL Charge 3",
        [
            0,
            2,
        ],
        6500,
        "Не купите этот товар",
        "./assets/products/jbl_ch_3.jpg",
    ],
    [
        "Proda Wireless Charger RP-W4",
        [
            0,
            3,
        ],
        9000,
        "Не купите этот товар",
        "./assets/products/wrls_ch_rpw4.png",
    ],
    [
        "JBL Charge 2",
        [
            0,
            2,
        ],
        6000,
        "Не купите этот товар",
        "./assets/products/jbl_ch_2.jpg",
    ],
    [
        "AirPods i9S",
        [
            0,
            1,
        ],
        5500,
        "Не купите этот товар",
        "./assets/products/ap_i9.jpg",
    ],
    [
        "AirPods i11",
        [
            0,
            1,
        ],
        6500,
        "Не купите этот товар",
        "./assets/products/ap_i11.jpg",
    ],
    [
        "AirPods i12",
        [
            0,
            1,
        ],
        7500,
        "Не купите этот товар",
        "./assets/products/ap_i12.jpg",
    ],
    [
        "AirPods i99",
        [
            0,
            1,
        ],
        8000,
        "Не купите этот товар",
        "./assets/products/ap_i99.jpg",
    ],
    [
        "AirPods i100",
        [
            0,
            1,
        ],
        8500,
        "Не купите этот товар",
        "./assets/products/ap_i100.jpg",
    ],
    [
        "AirDots",
        [
            0,
            1,
        ],
        11000,
        "Не купите этот товар",
        "./assets/products/ad.png",
    ],
    [
        "AirDots 3",
        [
            0,
            1,
        ],
        14000,
        "Не купите этот товар",
        "./assets/products/ad_3.png",
    ]
]


?>


<?php
include("./code_parts/st.php");
?>
<div class="content">
    <div class="navbar">
        <a href="all.php?type=0">Все</a>
        <a href="all.php?type=1">Наушники</a>
        <a href="all.php?type=2">Динамики</a>
        <a href="all.php?type=3">Зарядные Устройства</a>
        <a href="all.php?type=1">Наушники</a>
        <a href="all.php?type=1">Наушники</a>
        <a href="all.php?type=1">Наушники</a>
        <a href="all.php?type=1">Наушники</a>
        <a href="all.php?type=1">Наушники</a>
        <a href="all.php?type=1">Наушники</a>
        <a href="all.php?type=1">Наушники</a>
    </div>
    <hr class="t-c">
    <div class="products">
        <?php

            for ($i=0; $i < count($products); $i++) { 
                $b = false;
                for ($j=0; $j < count($products[$i][1]); $j++) { 
                    if($type == $products[$i][1][$j]) {
                        $b = true;
                    }
                }
                if($b){
                    ?>   
                    <div class="product">
                        <p class="product-name"><?php echo $products[$i][0] ?></p>
                        <img class="product-img" src="<?php echo $products[$i][4] ?>">
                        <p class="product-price"><?php echo $products[$i][2] ?> AMD</p>
                    </div>

                    <?php
                }
            }

        ?>
    </div>
</div>
<?php
include("./code_parts/ed.php");
?>