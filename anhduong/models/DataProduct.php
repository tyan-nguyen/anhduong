<?php

namespace app\models;

class DataProduct
{
    public static function data(){
        $vatLieuArray = [
            [
                'id'=>1,
                'slug'=>'vat-lieu-1',
                'image'=>'vat-lieu-1.jpg',
                'title'=>'AD008/Cross Hairline Golden',
                'subTitle'=>'Bề mặt sọc chéo chống vân tay màu vàng',
                'desc'=>'Inox mạ màu vàng mang tới vẻ đẹp trang nhã, thanh lịch rất hợp với các dạng không gian có phần cổ điển mang tới cho người nhìn sự phá cách, lạ mắt rất ấn tượng, đơn giản không phô trương.'
            ],
            
            [
                'id'=>2,
                'slug'=>'vat-lieu-2',
                'image'=>'vat-lieu-2.jpg',
                'title'=>'AD008/Hairline Golden',
                'subTitle'=>'Bề mặt hairline chống vân tay màu vàng',
                'desc'=>'Tấm inox mạ màu vàng mô tả màu sắc giống như vàng với kỹ thuật hiện đại, sản phẩm mô phỏng rất sắc nét, chân thực màu vàng gold sáng với vẻ đẹp tinh tế.'
            ],
            
            [
                'id'=>3,
                'slug'=>'vat-lieu-3',
                'image'=>'vat-lieu-3.jpg',
                'title'=>'AD008/Sand Balsted Golden',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu vàng',
                'desc'=>'Inox mạ màu vàng được ứng dụng trong xây dựng, ốp tường, ốp trần trang trí, thiết bị y tế, cửa thang máy, cabin thang máy, thang cuốn, ốp chân tường, hệ thống cửa ra vào các tòa nhà, nhà phố, biệt thự, nhà hàng, khách sạn, shop, showroom trưng bày, nội thất...'
            ],
            
            [
                'id'=>4,
                'slug'=>'vat-lieu-4',
                'image'=>'vat-lieu-4.jpg',
                'title'=>'AD008/Vibration Golden',
                'subTitle'=>'Bề mặt xước rối chống vân tay màu vàng',
                'desc'=>'Inox 304 màu vàng là những sản phẩm nội thất bằng chất liệu inox 304… được phủ lên mình một lớn sơn vàng óng bằng công nghệ mạ PVD tiên tiến nhất hiện nay.'
            ],
            
            [
                'id'=>5,
                'slug'=>'vat-lieu-5',
                'image'=>'vat-lieu-5.jpg',
                'title'=>'AD009/Cross Hairline Golden Honey',
                'subTitle'=>'Bề mặt sọc chéo chống vân tay màu golden honey',
                'desc'=>'Inox mạ màu ngày nay đã được sử dụng phổ biến trong kiến trúc xây dựng nội ngoại thất như làm cửa cổng, hàng rào, lan can, cầu thang,...để tạo nên những sản phẩm đẹp, sang trọng, cao cấp, mang tính nghệ thuật cao.'
            ],
            
            [
                'id'=>6,
                'slug'=>'vat-lieu-6',
                'image'=>'vat-lieu-6.jpg',
                'title'=>'AD009/Sand Balsted Golden Honey',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu golden honey',
                'desc'=>'Inox nói chung và inox mạ màu nói riêng đều là dòng sản phẩm đang được ưa chuộng và tin dùng bởi nhiều khách hàng trên thị trường vì những lợi ích, tính năng sản phẩm mang lại.'
            ],
            
            [
                'id'=>7,
                'slug'=>'vat-lieu-7',
                'image'=>'vat-lieu-7.jpg',
                'title'=>'AD009/Sand Balsted Golden Honey',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu golden honey',
                'desc'=>'Inox nói chung và inox mạ màu nói riêng đều là dòng sản phẩm đang được ưa chuộng và tin dùng bởi nhiều khách hàng trên thị trường vì những lợi ích, tính năng sản phẩm mang lại.'
            ],
            
            [
                'id'=>8,
                'slug'=>'vat-lieu-8',
                'image'=>'vat-lieu-8.jpg',
                'title'=>'AD009/Vibration Golden Honey',
                'subTitle'=>'Bề mặt xước rối chống vân tay màu golden honey',
                'desc'=>'Inox mạ màu được gia công thiết kế từ chất liệu thép không gỉ, inox chất lượng cao. Sau đó, trên bề mặt inox được mạ một lớp màu bóng trên công nghệ mạ chân không PVD hiện đại để tạo ra nhiều mẫu mã, màu sắc cho sản phẩm thỏa mãn nhu cầu sử dụng của nhiều khách hàng.'
            ],
            
            [
                'id'=>9,
                'slug'=>'vat-lieu-9',
                'image'=>'vat-lieu-9.jpg',
                'title'=>'Bề mặt hairline màu light ivory',
                'subTitle'=>'',
                'desc'=>'Inox mạ màu thường có màu vàng, màu vàng đồng, màu đen, màu đỏ, màu xanh,… với mỗi mỗi màu sẽ có độ đậm nhạt khác nhau.'
            ],
            
            [
                'id'=>10,
                'slug'=>'vat-lieu-10',
                'image'=>'vat-lieu-10.jpg',
                'title'=>'Bề mặt hairline màu goldenrod',
                'subTitle'=>'',
                'desc'=>'Inox mạ màu được sản xuất từ các loại inox khác nhau dựa vào tỉ lệ mangan và tỉ lệ niken có trong hợp chất như inox 201, inox 304,…'
            ],
            
            [
                'id'=>11,
                'slug'=>'vat-lieu-11',
                'image'=>'vat-lieu-11.jpg',
                'title'=>'Bề mặt hairline màu violet',
                'subTitle'=>'',
                'desc'=>'Thành phần kim loại của inox mạ màu là một trong những yếu tố ảnh hưởng đến giá thành sản phẩm của inox mạ màu, quyết định đến tính chất, độ bền, tính kháng va chạm và khả năng chịu nhiệt.'
            ],
            
            [
                'id'=>12,
                'slug'=>'vat-lieu-12',
                'image'=>'vat-lieu-12.jpg',
                'title'=>'Bề mặt hairline màu rosybrown',
                'subTitle'=>'',
                'desc'=>'Inox mạ màu hiện nay trên thị trường xuất hiện ngày càng nhiều với đa dạng về mẫu mã, sản phẩm, chủng loại và nhà cung ứng để đáp ứng nhu cầu sử dụng sản phẩm của khách hàng.'
            ],
            
            [
                'id'=>13,
                'slug'=>'vat-lieu-13',
                'image'=>'vat-lieu-13.jpg',
                'title'=>'Bề mặt hairline màu copper red',
                'subTitle'=>'',
                'desc'=>'Inox mạ màu được xem là một sản phẩm tạo nên vẻ sang trọng, tăng tính thẩm mỹ cho các công trình, không gian kiến trúc nội thất, ngoại thất.'
            ],
            
            [
                'id'=>14,
                'slug'=>'vat-lieu-14',
                'image'=>'vat-lieu-14.jpg',
                'title'=>'Bề mặt hairline màu rock black',
                'subTitle'=>'',
                'desc'=>'Bản chất là inox, inox mạ màu đen có độ bền rất cao. Lớp mạ vàng bên ngoài được phủ bằng công nghệ cao nên có thể chống chịu tốt với các điều kiện của môi trường.'
            ],
            
            [
                'id'=>15,
                'slug'=>'vat-lieu-15',
                'image'=>'vat-lieu-15.jpg',
                'title'=>'Bề mặt hairline màu smoky grey',
                'subTitle'=>'',
                'desc'=>'Inox mạ màu là thép không gỉ gia công cán nguội được đánh bóng gương, xước rối, hoặc tạo hoa văn trên bề mặt bằng công nghệ mạ màu chân không PVD, có lớp keo bảo vệ, chất lượng được làm từ inox 304, 316, 201…'
            ],
            
            [
                'id'=>16,
                'slug'=>'vat-lieu-16',
                'image'=>'vat-lieu-16.jpg',
                'title'=>'Bề mặt hairline màu purple bronze',
                'subTitle'=>'',
                'desc'=>'Inox màu là thép không gỉ được mạ thêm màu bằng các phương pháp khác nhau như mạ truyền thống, mạ chân không PVD… để đáp ứng nhu cầu ngày càng đa dạng của khách hàng.'
            ],
            
            [
                'id'=>17,
                'slug'=>'vat-lieu-17',
                'image'=>'vat-lieu-17.jpg',
                'title'=>'AD006/Cross Hairline Dark Grey ',
                'subTitle'=>'Bề mặt sọc chéo chống vân tay màu xám đen',
                'desc'=>'Chất liệu của inox mạ màu cũng chính từ các inox phổ biến như inox 201, inox 304, inox 316, inox 430…'
            ],
            
            [
                'id'=>18,
                'slug'=>'vat-lieu-18',
                'image'=>'vat-lieu-18.jpg',
                'title'=>'AD006/Vibration Dark Grey',
                'subTitle'=>'Bề mặt xước rối chống vân tay màu xám đen',
                'desc'=>'Bề mặt inox mạ màu có thể được gia công bóng hoặc xước với màu sắc phong phú như xanh, đỏ, đen, hồng, vàng, vàng đồng, đồng đỏ, bạc… giúp gia tăng thẩm mỹ và khả năng đáp ứng nhiều công trình, kiến trúc hiện nay.'
            ],
            
            [
                'id'=>19,
                'slug'=>'vat-lieu-19',
                'image'=>'vat-lieu-19.jpg',
                'title'=>'AD006/Hairline Dark Grey',
                'subTitle'=>'Bề mặt hairline chống vân tay màu xám đen',
                'desc'=>'Bản chất của inox mạ màu chính là thép không gỉ nên chứng cũng mang tính chất và đặc điểm của thép không gỉ.'
            ],
            
            [
                'id'=>20,
                'slug'=>'vat-lieu-20',
                'image'=>'vat-lieu-20.jpg',
                'title'=>'AD006/Sand Balsted Dark Grey',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu xám đen',
                'desc'=>'Ngoài việc tăng giá trị thẩm mỹ cho ngôi nhà, inox mạ màu còn đáp ứng khía cạnh về phong thủy, vốn cũng là xu hướng của mọi gia đình hiện nay.'
            ],
            
            [
                'id'=>21,
                'slug'=>'vat-lieu-21',
                'image'=>'vat-lieu-21.jpg',
                'title'=>'AD003/Cross Hairline Carbon Black',
                'subTitle'=>'Bề mặt sọc chéo chống vân tay màu than đen',
                'desc'=>'Inox mạ màu được các chuyên gia về thiết kế kiến trúc cảnh quan và kiến trúc xây dựng khuyên dùng vì được ứng dụng đa dạng, có thể làm cổng, hàng rào, lan can, các vật dụng trang trí nhà cửa như kệ, bàn ghế, tủ bếp, cửa lùa, vách ngăn… và trong các công trình nhà ở, resort, khách sạn, nhà hàng, quán karaoke, trung tâm thương mại…'
            ],
            
            [
                'id'=>22,
                'slug'=>'vat-lieu-22',
                'image'=>'vat-lieu-22.jpg',
                'title'=>'AD003/Sand Balsted Carbon Black',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu than đen',
                'desc'=>'Ngày nay, người ta còn sử dụng inox mạ màu để tạo ra các sản phẩm bếp và đồ dùng gia dụng như thìa, nĩa, dao, phin café, tách uống nước, kệ giá để hàng hóa hoặc quần áo … Một số bộ dao và thìa nĩa được làm bằng inox màu vàng đồng mang lại vẻ đẹp sang trọng, đẳng cấp cho bàn ăn của gia đình hoặc các sự kiện.'
            ],
            
            [
                'id'=>23,
                'slug'=>'vat-lieu-23',
                'image'=>'vat-lieu-23.jpg',
                'title'=>'AD003/Vibration Carbon Black',
                'subTitle'=>'Bề mặt xước rối chống vân tay màu than đen',
                'desc'=>'Ngoài trang trí nội ngoại thất, inox màu cũng được sử dụng phổ biến để làm bảng hiệu, bảng quảng cáo, bảng tên công ty, logo, bảng chữ nổi…'
            ],
            
            [
                'id'=>24,
                'slug'=>'vat-lieu-24',
                'image'=>'vat-lieu-24.jpg',
                'title'=>'AD003/Hairline Carbon Black',
                'subTitle'=>'Bề mặt hairline chống vân tay màu than đen',
                'desc'=>'Nhờ ưu điểm và tính ứng dụng thực tế cao, inox mạ màu ngày càng trở thành lựa chọn phổ biến của nhiều người. Chúng không chỉ mang lại chất lượng cuộc sống đa dạng và nhiều sắc màu hơn, mà còn tiện ích và đẳng cấp hơn.'
            ],
            
            [
                'id'=>25,
                'slug'=>'vat-lieu-25',
                'image'=>'vat-lieu-25.jpg',
                'title'=>'Vibration Anti Fingerprint',
                'subTitle'=>'Bề mặt xước rối chống vân tay',
                'desc'=>'So với những chất liệu khác, giá của những loại inox màu này tương đối mềm, thích hợp với túi tiền của người tiêu sử dụng. Bạn có thể chọn lựa giữa inox 201 và inox 304 để làm vật liệu trang trí vì đây là hai loại inox thông dụng, có mức giá hợp lí và chênh lệch không quá lớn.'
            ],
            
            [
                'id'=>26,
                'slug'=>'vat-lieu-26',
                'image'=>'vat-lieu-26.jpg',
                'title'=>'Sand Blasted Anti Fingerprint',
                'subTitle'=>'Bề mặt phun cát chống vân tay',
                'desc'=>'Inox màu có đủ màu sắc để chúng ta chọn lựa và sử dụng trong thiết kế, thi công nội thất thể hiện sự sang trọng, hiện đại và tinh tế. Những dòng kim loại này thường không quá cầu kì, màu sắc đơn giản dễ dàng gia công.'
            ],
            
            [
                'id'=>27,
                'slug'=>'vat-lieu-27',
                'image'=>'vat-lieu-27.jpg',
                'title'=>'Hairline Anti Fingerprint',
                'subTitle'=>'Bề mặt hairline chống vân tay',
                'desc'=>'Inox màu đã được cải tiến không ngừng nên dưới sự tác động của nhiệt độ cao chúng hoàn toàn không bị biến dạng và thay đổi cả về kích thước lẫn hình dáng.'
            ],
            
            [
                'id'=>28,
                'slug'=>'vat-lieu-28',
                'image'=>'vat-lieu-28.jpg',
                'title'=>'Cross Hairline Anti Fingerprint',
                'subTitle'=>'Bề mặt sọc chéo chống vân tay',
                'desc'=>'Những loại inox màu này có thể tiếp xúc được với nhiều loại hóa chất khác nhau mà không có có bất cứ sự thay đổi nào nhờ vào công nghệ mạ chân không PVD, chịu được thời tiết khắc nghiệt.'
            ],
            
            [
                'id'=>29,
                'slug'=>'vat-lieu-29',
                'image'=>'vat-lieu-29.jpg',
                'title'=>'AD007/Vibration French Rose',
                'subTitle'=>'Bề mặt xước rối chống vân tay màu french rose',
                'desc'=>'Nếu như trước kia, chúng ta thường quen sử dụng những loại vật liệu kim loại như sắt, nhôm để trang trí nội thất. Thì giờ đây, việc sử dụng vật liệu inox màu trở thành xu thế. Với đặc điểm bền không gỉ, chúng có thể sử dụng trong một thời gian rất lâu mà không bị oxi hóa như những loại chất liệu cũ.'
            ],
            
            [
                'id'=>30,
                'slug'=>'vat-lieu-30',
                'image'=>'vat-lieu-30.jpg',
                'title'=>'AD007/Sand Blasted French Rose',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu french rose',
                'desc'=>'Inox 304 là loại inox chứa 50% hàm lượng thép không gỉ, có thể ứng dụng hầu hết trong những lĩnh vực. Ngoài việc sử dụng inox 304 trong thiết kế nội thất, người ta còn sử dụng inox 304 vào sản xuất những vật dụng hằng ngày chẳng hạn như chén, đũa, thìa, chảo,…'
            ],
            
            [
                'id'=>31,
                'slug'=>'vat-lieu-31',
                'image'=>'vat-lieu-31.jpg',
                'title'=>'AD007/Hairline French Rose ',
                'subTitle'=>'Bề mặt hairline chống vân tay màu french rose',
                'desc'=>'Inox 201 là loại inox được sản xuất dựa trên công nghệ thép không gỉ và được bổ sung các loại chất liệu như mangan và nitơ. Những dòng thép inox 201 có khả năng định hình tốt, chống mài mòn. Thông qua quá trình xử lý nhiệt, chúng ta không thể tăng độ cứng cho inox nhưng lại có thể tăng độ bền khi thực hiện gia công để nguội.'
            ],
            
            [
                'id'=>32,
                'slug'=>'vat-lieu-32',
                'image'=>'vat-lieu-32.jpg',
                'title'=>'AD012/Vibration Maple',
                'subTitle'=>'Bề mặt xước rối chống vân tay màu maple',
                'desc'=>'Có hai loại inox màu phổ biến trên thị trường và được ứng dụng nhiều trong thực tế đó là: inox 201 và inox 304. Inox 201 giá rẻ hơn inox 304, độ bền cũng không bằng và cũng hạn chế về mặt gia công chẳng hạn như không uốn cong được...'
            ],
            
            [
                'id'=>33,
                'slug'=>'vat-lieu-33',
                'image'=>'vat-lieu-33.jpg',
                'title'=>'AD012/Sand Blasted Maple',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu maple',
                'desc'=>'Một số loại inox màu được ưa chuộng và sử dụng rộng rãi có thể kể đến như: inox màu vàng, inox màu đồng, inox màu vàng đồng, inox màu đen, inox màu vàng hồng, inox màu đỏ, inox màu xanh...'
            ],
            
            [
                'id'=>34,
                'slug'=>'vat-lieu-34',
                'image'=>'vat-lieu-34.jpg',
                'title'=>'AD012/Hairline Maple',
                'subTitle'=>'Bề mặt hairline chống vân tay màu maple',
                'desc'=>'Inox màu được sản xuất trên công nghệ mạ chân không PVD tiên tiến rất đa dạng màu sắc như: vàng, vàng hồng, đen, xám, trắng...Chính bởi vì đặc tính bền, không gỉ và nhiều màu sắc nên inox màu được nhiều người yêu thích, chọn lựa làm những vật dụng nội thất, đồ trang trí.'
            ],
            
            [
                'id'=>35,
                'slug'=>'vat-lieu-35',
                'image'=>'vat-lieu-35.jpg',
                'title'=>'AD004/Vibration Tan',
                'subTitle'=>'Bề mặt xước rối chống vân tay màu tan',
                'desc'=>'Inox màu được sử dụng nhiều làm quảng cáo như chữ nổi màu bạc hay màu vàng, loại quảng cáo này có thẩm mỹ cao.'
            ],
            
            [
                'id'=>36,
                'slug'=>'vat-lieu-36',
                'image'=>'vat-lieu-36.jpg',
                'title'=>'AD004/Sand Blasted Tan',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu tan',
                'desc'=>'Tùy vào từng sản phẩm khác nhau để sử dụng loại inox như inox 201, inox 304 với độ dày và kích thước khác nhay tùy theo nhu cầu sử dụng. Inox màu được ứng dụng nhiều trong trang trí.'
            ],
            
            [
                'id'=>37,
                'slug'=>'vat-lieu-37',
                'image'=>'vat-lieu-37.jpg',
                'title'=>'AD004/Hairline Tan',
                'subTitle'=>'Bề mặt hairline chống vân tay màu tan',
                'desc'=>'Inox màu được mệnh danh là “ông hoàng trong xây dựng và thiết kế” do những đặc tính ưu việt và sự đa dạng về màu sắc – điều mà không phải vật liệu nào cũng có được.'
            ],
            
            [
                'id'=>38,
                'slug'=>'vat-lieu-38',
                'image'=>'vat-lieu-38.jpg',
                'title'=>'AD004/Cross Hairline Tan',
                'subTitle'=>'Bề mặt sọc chéo chống vân tay màu tan',
                'desc'=>'Ứng dụng inox màu trong những lĩnh vực như: <br/>
- Gia công các chi tiết trang trí nội ngoại thất, cho cửa sổ, mái vòm, cửa ra vào, các chi tiết tay vịn ban công, cầu thang,… <br/>
- Cắt, gia công hoa văn, hình ảnh dùng làm vách ngăn cho nhà ở, phòng ngủ, văn phòng, nhà hàng,..'
            ],
            
            [
                'id'=>39,
                'slug'=>'vat-lieu-39',
                'image'=>'vat-lieu-39.jpg',
                'title'=>'AD010/Sand Blasted Light Tan',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu light tan',
                'desc'=>'Ứng dụng inox màu trong những lĩnh vực như: <br/>
-  Gia công làm các vật dụng thường ngày: ly, bình giữ nhiệt, tách, đĩa, đồ gia dụng,… <br/>
- Dùng để thiết kế, làm logo, chữ nổi trang trí cho văn phòng, tòa nhà, hành lang công ty, sảnh chờ, lối đi,… <br/>
- Làm bảng hiệu, bảng quảng cáo cho các cửa hàng, quán cà phê, quán ăn, quán bar, khách sạn, cơ sở kinh doanh'
            ],
            
            [
                'id'=>40,
                'slug'=>'vat-lieu-40',
                'image'=>'vat-lieu-40.jpg',
                'title'=>'AD010/Hairline Light Tan',
                'subTitle'=>' Bề mặt hairline chống vân tay màu light tan',
                'desc'=>'Inox 304 màu có màu sắc sang trọng, ấn tượng, hoa văn bắt mắt nên luôn là sự lựa chọn hàng đầu của các doanh nghiệp, cá nhân cho các ứng dụng trang trí, quảng cáo đòi hỏi độ bền và tính thẩm mỹ cao. Các đặc tính và ưu điểm nổi trội của sản phẩm khiến người dùng đặc biệt yêu thích.'
            ],
            
            [
                'id'=>41,
                'slug'=>'vat-lieu-41',
                'image'=>'vat-lieu-41.jpg',
                'title'=>'AD010/Cross Hairline Light Tan',
                'subTitle'=>'Bề mặt sọc chéo chống vân tay màu light tan',
                'desc'=>'Inox 304 màu trắng gương, vàng gương, trắng xước, inox vàng xước với độ bền cao, nhiều ưu điểm, màu sắc sang trọng, hoa văn, kiểu dáng ấn tượng, đa dạng độ dày, được đông đảo các cá nhân, tổ chức, các doanh nghiệp sử dụng, ứng dụng trong nhiều lĩnh vực khác nhau.'
            ],
            
            [
                'id'=>42,
                'slug'=>'vat-lieu-42',
                'image'=>'vat-lieu-42.jpg',
                'title'=>'AD011/Hairline Hazelnut',
                'subTitle'=>'Bề mặt hairline chống vân tay màu hazelnut',
                'desc'=>'Inox màu được phân loại dựa vào chất liệu inox như:<br/>
- Inox 304: không gỉ sét, không bị ăn mòn, có khả năng chống chịu tốt với thời tiết khắc nghiệt, bền, dẻo, có thể gia công các chi tiết dễ dàng, thích hợp sử dụng trong mọi điều kiện thời tiết.<br/>
- Inox 201: có độ bền cao, có thể bị oxy hóa, gỉ sét sau thời gian dài sử dụng, sản phẩm có thể chịu được nhiệt độ cao, trọng lượng nhẹ thường dùng cho ứng dụng trong nhà.'
            ],
            
            [
                'id'=>43,
                'slug'=>'vat-lieu-43',
                'image'=>'vat-lieu-43.jpg',
                'title'=>'AD011/Sand Blasted Hazelnut',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu hazelnut',
                'desc'=>'Inox màu được phân loại dựa vào bề mặt inox như:<br/>
- Inox gương: bề mặt được gia công sáng bóng như gương, có thể phản chiếu hình ảnh, sáng bóng, đẹp mắt<br/>
- Inox xước hairline: inox có bề mặt với hoa văn xước ngang độc đáo, ấn tượng,<br/>
- Inox mờ: có bề mặt không bóng loáng, không có phản chiếu hình ảnh như tấm inox gương, độc đáo, sang trọng.'
            ],
            
            [
                'id'=>44,
                'slug'=>'vat-lieu-44',
                'image'=>'vat-lieu-44.jpg',
                'title'=>'AD011/Vibration Hazelnut',
                'subTitle'=>'Bề mặt xước rối chống vân tay màu hazelnut',
                'desc'=>'Có rất nhiều loại inox tấm với màu sắc khác nhau, đa dạng sự lựa chọn cho khách hàng để dùng trong trang trí, quảng cáo, xây dựng với nhiều mục đích khác nhau.'
            ],
            
            [
                'id'=>45,
                'slug'=>'vat-lieu-45',
                'image'=>'vat-lieu-45.jpg',
                'title'=>'AD005/Hairline Cinnamon',
                'subTitle'=>'Bề mặt hairline chống vân tay màu cinnamon',
                'desc'=>'Inox màu là vật liệu đang được yêu thích bậc nhất trong ngành xây dựng và thiết kế, inox màu sở hữu những những ưu điểm nổi bật.'
            ],
            
            [
                'id'=>46,
                'slug'=>'vat-lieu-46',
                'image'=>'vat-lieu-46.jpg',
                'title'=>'AD005/Sand Blasted Cinnamon',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu cinnamon',
                'desc'=>'Inox màu chính là chất liệu thép không gỉ thông thường đã được xử lý và mạ màu bằng nhiều phương pháp khác nhau.
                
'
            ],
            
            [
                'id'=>47,
                'slug'=>'vat-lieu-47',
                'image'=>'vat-lieu-47.jpg',
                'title'=>'AD005/Vibration Cinnamon',
                'subTitle'=>'Bề mặt xước rối chống vân tay màu cinnamon',
                'desc'=>'Nhờ ưu điểm và tính ứng dụng thực tế cao, thép không gỉ mạ màu ngày càng trở thành lựa chọn phổ biến của nhiều người. Chúng không chỉ mang lại chất lượng cuộc sống đa dạng và nhiều sắc màu hơn, mà còn tiện ích và đẳng cấp hơn.'
            ],
            
            [
                'id'=>48,
                'slug'=>'vat-lieu-48',
                'image'=>'vat-lieu-48.jpg',
                'title'=>'AD002/Vibration Bronze',
                'subTitle'=>'Bề mặt xước rối chống vân tay màu bronze',
                'desc'=>'Ngoài trang trí nội ngoại thất, inox màu cũng được sử dụng phổ biến để làm bảng hiệu, bảng quảng cáo, bảng tên công ty, logo, bảng chữ nổi…'
            ],
            
            [
                'id'=>49,
                'slug'=>'vat-lieu-49',
                'image'=>'vat-lieu-49.jpg',
                'title'=>'AD002/Sand Blasted Bronze',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu bronze',
                'desc'=>'Ngày nay, người ta còn sử dụng thép không gỉ màu để tạo ra các sản phẩm bếp và đồ dùng gia dụng như thìa, nĩa, dao, phin café, tách uống nước, kệ giá để hàng hóa hoặc quần áo… Một số bộ dao và thìa nĩa được làm bằng inox màu vàng đồng mang lại vẻ đẹp sang trọng, đẳng cấp cho bàn ăn của gia đình hoặc các sự kiện.'
            ],
            
            [
                'id'=>50,
                'slug'=>'vat-lieu-50',
                'image'=>'vat-lieu-50.jpg',
                'title'=>'AD002/Hairline Bronze',
                'subTitle'=>'Bề mặt hairline chống vân tay màu bronze',
                'desc'=>'Inox màu được các chuyên gia về thiết kế kiến trúc cảnh quan và kiến trúc xây dựng khuyên dùng. Ứng dụng đa dạng, có thể làm cổng, hàng rào, lan can, các vật dụng trang trí nhà cửa như kệ, bàn ghế, tủ bếp, cửa lùa, vách ngăn… và trong các công trình nhà ở, resort, khách sạn, nhà hàng, quán karaoke, trung tâm thương mại…'
            ],
            
            [
                'id'=>51,
                'slug'=>'vat-lieu-51',
                'image'=>'vat-lieu-51.jpg',
                'title'=>'AD002/Cross Hairline Bronze',
                'subTitle'=>'Bề mặt sọc chéo chống vân tay màu bronze',
                'desc'=>'Inox màu từ thép không gỉ 201 và 430 dễ bị ăn mòn bởi môi trường chứa clorua (ví dụ như nước muối biển). Chúng có thể phá hủy lớp mạ màu bên ngoài và lớp crom bảo vệ bề mặt của inox khiến chúng bị gỉ sét nhanh hơn. Để khắc phục nhược điểm này, người dùng thường hạn chế sử dụng thép màu cho những ứng dụng có liên quan đến clorua hoặc nước biển. Thay vào đó, có thể sử dụng thép không gỉ màu 304 hay 316 để gia tăng khả năng chống ăn mòn hơn.'
            ],
            
            [
                'id'=>52,
                'slug'=>'vat-lieu-52',
                'image'=>'vat-lieu-52.jpg',
                'title'=>'AD001/Vibration Amber',
                'subTitle'=>'Bề mặt xước rối chống vân tay màu hổ phách',
                'desc'=>'So với những vật liệu có ưu điểm tương tự, inox màu có giá thành khá cạnh tranh, phù hợp với điều kiện kinh tế của nhiều đối tượng khách hàng.'
            ],
            
            [
                'id'=>53,
                'slug'=>'vat-lieu-53',
                'image'=>'vat-lieu-53.jpg',
                'title'=>'AD001/Sand Blasted Amber',
                'subTitle'=>'Bề mặt phun cát chống vân tay màu hổ phách',
                'desc'=>'Mẫu mã đa dạng, màu sắc phong phú giúp thép không gỉ màu ứng dụng được nhiều trong thực tế. Đặc biệt, những ngành yêu cầu vẻ đẹp bên ngoài của sản phẩm, thép không gỉ màu có thể kết hợp được nhiều vật dụng khác hoặc họa tiết theo concept nhất định, tạo nên sự sang trọng, đẳng cấp cho vật dụng, công trình.'
            ],
            
            [
                'id'=>54,
                'slug'=>'vat-lieu-54',
                'image'=>'vat-lieu-54.jpg',
                'title'=>'AD001/Hairline Amber',
                'subTitle'=>'Bề mặt hairline chống vân tay màu hổ phách',
                'desc'=>'Inox màu có khả năng chịu được nhiệt độ cao, không bị biến dạng hay thay đổi về màu sắc.'
            ],
            
            [
                'id'=>55,
                'slug'=>'vat-lieu-55',
                'image'=>'vat-lieu-55.jpg',
                'title'=>'AD001/Cross Hairline Amber',
                'subTitle'=>'Bề mặt sọc chéo chống vân tay màu hổ phách',
                'desc'=>'Khả năng chống ăn mòn bề mặt được gia tăng nhiều hơn khi inox được mạ một lớp màu bên ngoài, đặc biệt là trong điều kiện môi trường ẩm ướt hoặc có tiếp xúc với hóa chất.'
            ],
            
            [
                'id'=>56,
                'slug'=>'vat-lieu-56',
                'image'=>'vat-lieu-56.jpg',
                'title'=>'Bright Bead Blast-AD',
                'subTitle'=>'',
                'desc'=>'Các sản phẩm từ inox màu có độ bền cao, chịu được tác động lực và nhiệt độ cao của môi trường và ngoại cảnh. Lớp sơn màu bên ngoài không bị bong tróc, có thể sử dụng ở trong nhà hoặc ngoài trời.'
            ],
            
            [
                'id'=>57,
                'slug'=>'vat-lieu-57',
                'image'=>'vat-lieu-57.jpg',
                'title'=>'Ti Bronze Vibration-AD',
                'subTitle'=>'',
                'desc'=>'Sản phẩm thép không gỉ màu được làm từ inox 304 và inox 316 chắc chắn sẽ có tuổi thọ và khả năng chống oxy hóa cao hơn so với inox màu từ inox 201. Tùy vào mục đích và yêu cầu sử dụng, người dùng có thể lựa chọn thép không gỉ màu với chất liệu khác nhau để đáp ứng đúng và phù hợp nhất với nhu cầu của mình.'
            ],
            
            [
                'id'=>58,
                'slug'=>'vat-lieu-58',
                'image'=>'vat-lieu-58.jpg',
                'title'=>'Ti Black Mirror-AD',
                'subTitle'=>'',
                'desc'=>'Bản chất của inox màu chính là thép không gỉ nên chúng cũng mang tính chất và đặc điểm của thép không gỉ. Tùy thuộc vào mác thép nền mà inox màu sẽ khác nhau về tính chất như: <br/>
- Độ bền<br/>
- Khả năng chống ăn mòn<br/>
- Khả năng chịu lực, chịu nhiệt…'
            ],
            
            [
                'id'=>59,
                'slug'=>'vat-lieu-59',
                'image'=>'vat-lieu-59.jpg',
                'title'=>'Ti Rose Golden Hairline-AD',
                'subTitle'=>'',
                'desc'=>'Để sản xuất inox màu, phương pháp hiện đại mạ chân không được ưu tiên lựa chọn hơn so với phương pháp mạ truyền thống vì:<br/>
- Bề mặt thép không gỉ giữ màu lâu hơn<br/>
- Không chứa thành phần hóa học gây ô nhiễm môi trường<br/>
- An toàn cho sức khỏe người sản xuất và người dùng'
            ],
            
            [
                'id'=>60,
                'slug'=>'vat-lieu-60',
                'image'=>'vat-lieu-60.jpg',
                'title'=>'Ti Golden Hairline-AD',
                'subTitle'=>'',
                'desc'=>'Bề mặt inox màu có thể được gia công bóng hoặc xước với màu sắc phong phú như xanh, đỏ, đen, hồng, vàng, vàng đồng, đồng đỏ, bạc… giúp gia tăng thẩm mỹ và khả năng đáp ứng nhiều công trình, kiến trúc hiện nay.'
            ],
            
            [
                'id'=>61,
                'slug'=>'vat-lieu-61',
                'image'=>'vat-lieu-61.jpg',
                'title'=>'Ti Bronze-AD',
                'subTitle'=>'',
                'desc'=>'Chất liệu của inox màu cũng chính từ các mác thép không gỉ phổ biến như inox 201, inox 304, inox 316, inox 430…'
            ],
            //
            [
                'id'=>62,
                'slug'=>'vat-lieu-62',
                'image'=>'vat-lieu-62.jpg',
                'title'=>'Hairline-AD',
                'subTitle'=>'',
                'desc'=>'Inox màu là thép không gỉ được mạ thêm màu bằng các phương pháp khác nhau như mạ truyền thống, mạ chân không PVD… để đáp ứng nhu cầu ngày càng đa dạng của khách hàng, đặc biệt là trong ngành trang trí nội – ngoại thất.'
            ],
            
            [
                'id'=>63,
                'slug'=>'vat-lieu-63',
                'image'=>'vat-lieu-63.jpg',
                'title'=>'Ti Black Hairline-AD',
                'subTitle'=>'',
                'desc'=>'Tấm inox xước hay còn được gọi là inox sọc, là một loại inox trên bề mặt có các đường xước đồng đều nhau theo hướng chiều dài của cuộn inox nguyên bản.'
            ],
            
        ];
        return $vatLieuArray;
    }
}