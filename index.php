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
    ],
];
//Sử dụng git để clone tập tin này
//In ra màn hình dưới dạng html tên thương hiệu và tên sản phẩm
//Tên thương hiệu phải được in ra bằng tiếng việt ví dụ 'tenthuonghieu'=>'Samsung Phone', in ra html = Điện thoại Samsung
//Nếu name = 'Apple Phone' và name = 'Apple Headphone' thì gộp product vào và chung thương hiệu ghi là Apple
//Khi làm xong sử dụng git tạo một branch mới và push code lên branch ấy
//Sau khi push code lên , tạo một pull request giữa branch vừa tạo và branch master