<?php

namespace app\models;

class DataApplication
{
    public static function data(){
        $vatLieuArray = [
            [
                'id'=>1,
                'slug'=>'du-an-1',
                'image'=>'du-an-1.jpg',
                'title'=>'Đại Quang Minh',
                'subTitle'=>'Dự án Đại Quang Minh',
                'desc'=>'<p>- Địa điểm: Thành phố Hồ Chí Minh, Việt Nam<br/>
- Thời gian thực hiện: 2019 - Đến nay<br/>
- Hạng mục: Lan can kính, Len inox</p>'
            ],
            
            [
                'id'=>2,
                'slug'=>'du-an-2',
                'image'=>'du-an-2.jpg',
                'title'=>'Masterise B6, B7',
                'subTitle'=>'Dự án Masterise B6, B7',
                'desc'=>'<p>- Địa điểm: Thành phố Hồ Chí Minh, Việt Nam<br/>
- Thời gian thực hiện: 2022<br/>
- Hạng mục: Trụ lan can</p>'
            ],
            
            [
                'id'=>3,
                'slug'=>'du-an-3',
                'image'=>'du-an-3.jpg',
                'title'=>'Techcombank Lê Duẩn',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Thành phố Hồ Chí Minh, Việt Nam<br/>
- Thời gian thực hiện: 2022<br/>
- Hạng mục: Gia công tấm ốp</p>'
            ],
            
            [
                'id'=>4,
                'slug'=>'du-an-4',
                'image'=>'du-an-4.jpg',
                'title'=>'Wink Trần Hưng Đạo',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Thành phố Hồ Chí Minh, Việt Nam<br/>
- Thời gian thực hiện: 2022<br/>
- Hạng mục: Gia công tấm ốp</p>'
            ],
            
            [
                'id'=>5,
                'slug'=>'du-an-5',
                'image'=>'du-an-5.jpg',
                'title'=>'Regent Phú Quốc Residences',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Phú Quốc, Việt Nam<br/>
- Thời gian thực hiện: 2019<br/>
- Hạng mục: Mái đón</p>'
            ],
            
            [
                'id'=>6,
                'slug'=>'du-an-6',
                'image'=>'du-an-6.jpg',
                'title'=>'FLC Twin Towers',
                'subTitle'=>'Dự án FLC Twin Towers',
                'desc'=>'<p>- Địa điểm: Hà Nội, Việt Nam<br/>
- Thời gian thực hiện: 2019<br/>
- Hạng mục: Ốp cột</p>'
            ],
            
            [
                'id'=>7,
                'slug'=>'du-an-7',
                'image'=>'du-an-7.jpg',
                'title'=>'Waterina Suites',
                'subTitle'=>'Dự án Waterina Suites',
                'desc'=>'<p>- Địa điểm: Thành phố Hồ Chí Minh, Việt Nam<br/>
- Thời gian thực hiện: 2018<br/>
- Hạng mục: Lan can</p>'
            ],
            
            [
                'id'=>8,
                'slug'=>'du-an-8',
                'image'=>'du-an-8.jpg',
                'title'=>'Vân Đồn Airport',
                'subTitle'=>'Dự án Vân Đồn Airport',
                'desc'=>'<p>- Địa điểm: Quảng Ninh, Việt Nam<br/>
- Thời gian thực hiện: 2018<br/>
- Hạng mục: Mái đón, khung inox</p>'
            ],
            
            [
                'id'=>9,
                'slug'=>'du-an-9',
                'image'=>'du-an-9.jpg',
                'title'=>'Vinhomes Central Park',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Thành phố Hồ Chí Minh, Việt Nam<br/>
- Thời gian thực hiện: 2017<br/>
- Hạng mục: Lan can, khung inox</p>'
            ],
            
            
            [
                'id'=>10,
                'slug'=>'du-an-10',
                'image'=>'du-an-10.jpg',
                'title'=>'Vinhomes Metropolis',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Hà Nội, Việt Nam<br/>
- Thời gian thực hiện: 2017<br/>
- Hạng mục: Lan can</p>'
            ],
            
            [
                'id'=>11,
                'slug'=>'du-an-11',
                'image'=>'du-an-11.jpg',
                'title'=>'Vinhomes Sky Lake',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Hà Nội, Việt Nam<br/>
- Thời gian thực hiện: 2017<br/>
- Hạng mục: Lan can </p>'
            ],
            
            [
                'id'=>12,
                'slug'=>'du-an-12',
                'image'=>'du-an-12.jpg',
                'title'=>'Hilton Hotel',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Đà Nẵng, Việt Nam<br/>
- Thời gian thực hiện: 2016<br/>
- Hạng mục: Lan can</p>'
            ],
            
            [
                'id'=>13,
                'slug'=>'du-an-13',
                'image'=>'du-an-13.jpg',
                'title'=>'Thủ Thiêm Urban Area',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Tp. HCM, Việt Nam<br/>
- Thời gian thực hiện: 2015 - 2016<br/>
- Hạng mục: Lan can</p>'
            ],
            
            [
                'id'=>14,
                'slug'=>'du-an-14',
                'image'=>'du-an-14.jpg',
                'title'=>'Vietcombank Tower',
                'subTitle'=>'',
                'desc'=>'<p>
- Địa điểm: Thành phố Hồ Chí Minh, Việt Nam<br/>
- Thời gian thực hiện: 2015<br/>
- Hạng mục: Lan can, khung inox, mặt tiền kính </p>'
            ],
            
            [
                'id'=>15,
                'slug'=>'du-an-15',
                'image'=>'du-an-15.jpg',
                'title'=>'Buôn Ma Thuột Airport',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Buôn Ma Thuột, Việt Nam<br/>
- Thời gian thực hiện: 2015<br/>
- Hạng mục: Thang máy, lan can và mặt tiền kính</p>'
            ],
            
            [
                'id'=>16,
                'slug'=>'du-an-16',
                'image'=>'du-an-16.jpg',
                'title'=>'Novotel Hotel',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Phú Quốc, Việt Nam<br/>
- Thời gian thực hiện: 2015<br/>
- Hạng mục: Lan can </p>'
            ],
            
            [
                'id'=>17,
                'slug'=>'du-an-17',
                'image'=>'du-an-17.jpg',
                'title'=>'Keangnam Landmark',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Hà Nội, Việt Nam<br/>
- Thời gian thực hiện: 2011<br/>
- Hạng mục: Cửa, thang máy, lan can </p>'
            ],
            
            [
                'id'=>18,
                'slug'=>'du-an-18',
                'image'=>'du-an-18.jpg',
                'title'=>'Vinaconex Tower',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Hà Nội, Việt Nam<br/>
- Thời gian thực hiện: 2010<br/>
- Hạng mục: Khung inox, mặt tiền kính, thang máy</p>'
            ],
            
            [
                'id'=>19,
                'slug'=>'du-an-19',
                'image'=>'du-an-19.jpg',
                'title'=>'Crowne Plaza',
                'subTitle'=>'',
                'desc'=>'<p>- Địa điểm: Hà Nội, Việt Nam<br/>
- Thời gian thực hiện: 2009<br/>
- Hạng mục: Thang máy, lan can </p>'
            ],
            
            
            
        ];
        return $vatLieuArray;
    }
}