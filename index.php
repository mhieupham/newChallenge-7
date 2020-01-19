<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
//cho một array như sau
$array = [
    [
        'id'=>1,
        'tenthuonghieu'=>'Apple Phone',
        'sanpham'=>[
            [
                'id'=>1,
                'tensanpham'=>'Iphone11'
            ],
            [
                'id'=>2,
                'tensanpham'=>'Iphone X'
            ],
            [
                'id'=>3,
                'tensanpham'=>'Iphone 8'
            ]
        ]
    ],
    [
        'id'=>2,
        'tenthuonghieu'=>'Apple Headphone',
        'sanpham'=>[
            [
                'id'=>2,
                'tensanpham'=>'Airpods 1'
            ],
            [
                'id'=>3,
                'tensanpham'=>'Airpods 2'
            ]
        ]
    ],
    [
        'id'=>3,
        'tenthuonghieu'=>'Samsung Phone',
        'sanpham'=>[
            [
                'id'=>1,
                'tensanpham'=>'Samsung Galaxy Note 10'
            ],
            [
                'id'=>2,
                'tensanpham'=>'Samsung Galaxy Fold'
            ],
            [
                'id'=>3,
                'tensanpham'=>'Samsung Galaxy A70'
            ]
        ]
    ]
];
$vitenthuonghieu =[
    'Samsung Phone' =>'Điện thoại Samsung'
];
$sanpham=[];
    foreach ($array as $key => $value) {
        if ($value['tenthuonghieu'] == 'Apple Headphone' || $value['tenthuonghieu'] == 'Apple Phone') {
            $sanpham = array_merge($sanpham, $value['sanpham']);
            unset($array[$key]);
        }
    }
$newArray = [
    [
        'id'=>2,
        'tenthuonghieu'=>'Apple',
        'sanpham'=>$sanpham,
    ]
];
$array = array_merge($array,$newArray);
?>
<div class="header">
    <div class="container">
        <div class="row">
            <?php foreach ($array as $value) :?>
                        <div class="col-5 offset-1 rounded border mt-5 text-center px-0">
                            <label class="bg-primary w-100 py-3 text-light mb-0">
                                <?php
                                        $tenthuonghieu = $value['tenthuonghieu'];
                                        if (isset($vitenthuonghieu[$tenthuonghieu])) {
                                            echo "$vitenthuonghieu[$tenthuonghieu]";
                                        } else {
                                            echo "$tenthuonghieu";
                                        }
                                ?>
                            </label>
                            <ul style="float: left" class="w-100 pl-0">
                                <?php foreach ($value['sanpham'] as $keyChild => $valueChild ):?>
                                    <li style="list-style: none;" class="border-bottom pl-3 w-100 py-3 d-flex justify-content-start"><?php echo $valueChild['tensanpham']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!--//In ra màn hình dưới dạng html tên thương hiệu và tên sản phẩm-->
<!--//Tên thương hiệu phải được in ra bằng tiếng việt ví dụ 'tenthuonghieu'=>'Samsung Phone', in ra html = Điện thoại Samsung-->
<!--//Nếu name = 'Apple Phone' và name = 'Apple Headphone' thì gộp product vào và chung thương hiệu ghi là Apple-->