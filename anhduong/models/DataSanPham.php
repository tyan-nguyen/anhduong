<?php

namespace app\models;

class DataSanPham
{
    public static function data(){
        $sanPhamArray = [
            //tam op
            [
                'id'=>1,
                'type'=>'tam-op',
                'slug'=>'tam-op-1',
                'image'=>'tam-op-1.jpg',
                'images'=>[],
                'title'=>'Ốp sảnh - Ốp trần 6',
                'subTitle'=>'',
                'desc'=>'<p>Ốp sảnh lễ tân cho khách sạn hay cho bất kỳ một công ty nào đó là hạng mục rất được quan tâm và đầu tư. Bởi quầy lễ tân đẹp với không gian thật lộng lẫy, sang trọng, đẳng cấp sẽ để lại ấn tượng mạnh mẽ giúp khách hàng và đối tác nhớ đến doanh nghiệp của bạn lâu hơn. Tạo được ấn tượng mạnh mẽ về thị giác, mang lại cảm giác thân thiện và an toàn.</p>',
                'content'=>''
            ],
            
            [
                'id'=>2,
                'type'=>'tam-op',
                'slug'=>'tam-op-2',
                'image'=>'tam-op-2.jpg',
                'images'=>[],
                'title'=>'Ốp cột 5',
                'subTitle'=>'',
                'desc'=>'<p>Ốp cột inox với nhiều màu sắc họa tiết đa dạng phong phú, Ánh Dương có thể sản xuất gia công các sản phẩm inox hoàn thiện theo yêu cầu cụ thể của khách hàng.</p>',
                'content'=>''
            ],
            
            [
                'id'=>3,
                'type'=>'tam-op',
                'slug'=>'tam-op-3',
                'image'=>'tam-op-3.jpg',
                'images'=>[
                    0=>'tam-op-3.jpg',
                    1=>'tam-op-3-1.jpg',
                ],
                'title'=>'Ốp sảnh - Ốp trần 5',
                'subTitle'=>'',
                'desc'=>'<p>Ốp trần sử dụng inox 304 màu vàng hoặc hồng gương làm tăng độ nổi bật cho không gian nội thất, được thiết kế, đo đạc và sản xuất theo từng hiện trạng của khách hàng.</p>',
                'content'=>''
            ],
            
            [
                'id'=>4,
                'type'=>'tam-op',
                'slug'=>'tam-op-4',
                'image'=>'tam-op-4.jpg',
                'images'=>[],
                'title'=>'Ốp sảnh - Ốp trần 4',
                'subTitle'=>'',
                'desc'=>'<p>Inox là một loại vật liệu có rất nhiều ưu điểm, chúng có đặc tính chống oxy hóa, chống ẩm, chống mốc cực tốt, không bong tróc, cong vênh. Ốp trần inox giúp xóa bỏ sự đơn điệu trên trần nhà, tạo điểm nhấn ấn tượng cho không gian trần. Đặc biệt sự kết hợp của trần inox với đèn trang trí sẽ giúp không gian căn phòng trở nên lung linh, huyền ảo hơn.</p>',
                'content'=>''
            ],
            
            [
                'id'=>5,
                'type'=>'tam-op',
                'slug'=>'tam-op-5',
                'image'=>'tam-op-5.jpg',
                'images'=>[],
                'title'=>'Ốp sảnh - Ốp trần 3',
                'subTitle'=>'',
                'desc'=>'<p>Trang trí trần nhà sang trọng hơn khi trần ốp inox 304. Hiện nay nhu cầu trang trí cho không gian nội thất ngày càng nhiều. Không chỉ những căn biệt thự lâu đài, khách sạn, nhà hàng mà cả căn hộ chung cư những căn hộ diện tích nhỏ cũng được nhiều gia chủ quan tâm trang trí. Vị trí trần nhà là một vị trí rất quan trọng, và để trang trí cho vị trí đó thật đẹp mắt, sang trọng người ta sử dụng vật liệu trần inox trang trí. </p>',
                'content'=>''
            ],
            
            [
                'id'=>6,
                'type'=>'tam-op',
                'slug'=>'tam-op-6',
                'image'=>'tam-op-6.jpg',
                'images'=>[],
                'title'=>'Ốp sảnh - Ốp trần 2',
                'subTitle'=>'',
                'desc'=>'<p>Nội dung đang được cập nhật...</p>',
                'content'=>''
            ],
            
            [
                'id'=>7,
                'type'=>'tam-op',
                'slug'=>'tam-op-7',
                'image'=>'tam-op-7.jpg',
                'images'=>[],
                'title'=>'Ốp sảnh - Ốp trần 1',
                'subTitle'=>'',
                'desc'=>'<p>Ốp sảnh, ốp trần khách sạn, nhà hàng, trung tâm thương mại,… hiện đang được xem là một trong những giải pháp thi công ốp tường trang trí khá phổ biến hiện nay. Với những ưu điểm nổi trội về mặt thẩm mỹ cùng khả năng chống nước, chống ẩm mốc tốt.</p>',
                'content'=>''
            ],
            
            [
                'id'=>8,
                'type'=>'tam-op',
                'slug'=>'tam-op-8',
                'image'=>'tam-op-8.jpg',
                'images'=>[],
                'title'=>'Ốp vách thang máy 4',
                'subTitle'=>'',
                'desc'=>'<p>Ốp vách thang máy inox hiện nay đang là xu hướng với chất liệu inox sáng bóng, không gỉ, không bị biển đổi bởi các tác dộng mạnh bên ngoài. Vách ốp thang máy inox có đa dạng mẫu mã như: ốp inox xước hairline, inox màu đen xước, inox đen bóng, inox vàng hay inox vàng đồng đã trở thành điểm nhấn nổi bật và cho các tòa nhà trở lên sang trọng hơn.</p>',
                'content'=>''
            ],
            
            [
                'id'=>9,
                'type'=>'tam-op',
                'slug'=>'tam-op-9',
                'image'=>'tam-op-9.jpg',
                'images'=>[],
                'title'=>'Ốp vách thang máy 3',
                'subTitle'=>'',
                'desc'=>'<p>Ốp vách thang máy là bộ phận bao bọc bên ngoài cửa thang máy. Vừa có công dụng trang trí, vừa giúp bảo vệ cho người sử dụng tránh xa các máy móc vận hành bên trong thang.</p><p>Ngoài các tấm inox đơn giản, còn có thể sử dụng những loại inox hoa văn nhiều màu sắc phong phú làm tăng thêm tính thẩm mỹ cho không gian xung quanh. Chất liệu inox vô cùng bền bỉ, không hoen ghỉ hay bong tróc, hư hỏng trong suốt quá trình sử dụng.</p>',
                'content'=>''
            ],
            
            [
                'id'=>10,
                'type'=>'tam-op',
                'slug'=>'tam-op-10',
                'image'=>'tam-op-10.jpg',
                'images'=>[],
                'title'=>'Ốp vách thang máy 2',
                'subTitle'=>'',
                'desc'=>'<p>Inox 304 hay còn gọi là thép không gỉ đã cho ra đời các loại vách ốp inox chất lượng hàng đầu, kèm với công nghệ mạ màu hiện đại giúp cho tấm ốp vách thang máy inox trở nên khác biệt hơn về thiết kế và chất lượng hay độ bền cao.</p>',
                'content'=>''
            ],
            
            [
                'id'=>11,
                'type'=>'tam-op',
                'slug'=>'tam-op-11',
                'image'=>'tam-op-11.jpg',
                'images'=>[],
                'title'=>'Ốp vách thang máy 1',
                'subTitle'=>'',
                'desc'=>'<p>Ốp vách thang máy có vai trò quan trọng nhằm bảo vệ bên ngoài của thang máy giúp cho thang máy giữ được độ bền lâu hơn trước sự oxy hóa của môi trường không những thế còn tôn lên vẻ đẹp sang trọng của thang máy.</p>',
                'content'=>''
            ],
            
            [
                'id'=>12,
                'type'=>'tam-op',
                'slug'=>'tam-op-12',
                'image'=>'tam-op-12.jpg',
                'images'=>[],
                'title'=>'Ốp cột 4',
                'subTitle'=>'',
                'desc'=>'<p>Ốp cột inox trang trí không giới hạn phạm vi áp dụng được ứng dụng trong các công trình sau: sảnh chờ tòa nhà chung cư cao cấp, cao ốc văn phòng, trung tâm thương mại, hội trường trường học, bệnh viện, viện nghiên cứu...</p>',
                'content'=>''
            ],
            
            [
                'id'=>13,
                'type'=>'tam-op',
                'slug'=>'tam-op-13',
                'image'=>'tam-op-13.jpg',
                'images'=>[],
                'title'=>'Ốp cột 3',
                'subTitle'=>'',
                'desc'=>'<p>Ốp cột inox trang trí có bề mặt đẹp, cao cấp. Một số ưu điểm khi sử dụng inox trang trí như sau: Bề mặt cực kỳ đa dạng, không giới hạn về độ sáng tạo, bền với thời gian, sản xuất lắp dựng đơn giản, chắc chắn và an toàn không sợ rơi vỡ, sạch sẽ, dễ dàng vệ sinh bề mặt, giá thành vừa phải...</p>',
                'content'=>''
            ],
            
            [
                'id'=>14,
                'type'=>'tam-op',
                'slug'=>'tam-op-14',
                'image'=>'tam-op-14.jpg',
                'images'=>[],
                'title'=>'Ốp cột 2',
                'subTitle'=>'',
                'desc'=>'<p>Không chỉ có vẻ ngoài sang trọng, sáng bóng, ít bám bẩn và bền vững với thời gian,…Những chiếc cột ốp inox, mạ PVD còn góp phần giúp các tòa nhà sang trọng, sáng bóng, vững chắc và bền lâu hơn những nguyên vật liệu khác. Tiết kiệm được chi phí về lâu dài, không phải bảo trì, bảo dưỡng và sơn sửa, dễ vệ sinh lau chùi.</p>',
                'content'=>''
            ],
            
            [
                'id'=>15,
                'type'=>'tam-op',
                'slug'=>'tam-op-15',
                'image'=>'tam-op-15.jpg',
                'images'=>[],
                'title'=>'Ốp cột 1',
                'subTitle'=>'',
                'desc'=>'<p>Những cột to cột nhỏ được dựng lên nhằm làm trụ chính cho tòa nhà, bằng sự sáng tạo các kiến trúc sư đã sử dụng inox để tạo ra ốp cột inox, mạ PVD... làm trụ cột cho tòa nhà luôn vững chắc cũng như để trang trí thêm phần sang trọng và tinh tế.</p>',
                'content'=>''
            ],
            
            //cua inox
            [
                'id'=>16,
                'type'=>'cua-inox',
                'slug'=>'cua-inox-1',
                'image'=>'cua-inox-1.jpg',
                'images'=>[],
                'title'=>'Khung cửa inox 5',
                'subTitle'=>'',
                'desc'=>'<p>Khung cửa inox còn được thiết kế với những tạo hình đặc biệt, góp phần tạo nên vẻ đẹp riêng cho từng không gian. Chính vì vậy trước khi chọn được khung mẫu cửa inox đẹp, phù hợp với không gian. Bạn cần xác định cấu trúc của khung cửa là dạng vòm hay dạng uốn cong, dạng thẳng hay ngang thông thường... Từ đó có thể lựa chọn được mẫu khung cửa inox phù hợp.</p>',
                'content'=>''
            ],
            [
                'id'=>17,
                'type'=>'cua-inox',
                'slug'=>'cua-inox-2',
                'image'=>'cua-inox-2.jpg',
                'images'=>[],
                'title'=>'Khung cửa inox 4',
                'subTitle'=>'',
                'desc'=>'<p>Khung cửa inox chất liệu inox 304 chất lượng cao, sang trọng với độ bền vượt trội: chống rỉ sét và hư hỏng, chống nước và chống ẩm, dễ dàng vệ sinh, chùi rửa, chống vi khuẩn, nấm mốc, côn trùng gây hại bảo vệ sức khỏe và môi trường.</p>',
                'content'=>''
            ],
            [
                'id'=>18,
                'type'=>'cua-inox',
                'slug'=>'cua-inox-3',
                'image'=>'cua-inox-3.jpg',
                'images'=>[
                    0=>'cua-inox-3.jpg',
                    1=>'cua-inox-3-2.jpg',
                    2=>'cua-inox-3-3.jpg',
                    3=>'cua-inox-3-4.jpg',
                ],
                'title'=>'Khung cửa inox 3',
                'subTitle'=>'',
                'desc'=>'<p>Khung cửa inox được sản xuất từ nguyên liệu chính là inox với phần khung bảo vệ được làm toàn bộ bằng chất liệu inox. Đặc biệt, khung cửa inox còn được kết hợp cùng với kính cường lực, đem đến sự tinh tế, hiện đại cho các công trình. </p>',
                'content'=>''
            ],
            
            [
                'id'=>19,
                'type'=>'cua-inox',
                'slug'=>'cua-inox-4',
                'image'=>'cua-inox-4.jpg',
                'images'=>[
                    0=>'cua-inox-4.jpg',
                    1=>'cua-inox-4-2.jpg',
                    2=>'cua-inox-4-3.jpg',
                    3=>'cua-inox-4-4.jpg',
                ],
                'title'=>'Khung cửa inox 2',
                'subTitle'=>'',
                'desc'=>'<p>Khi nói về chất liệu inox, chắc chắn ai cũng biết rằng loại vật liệu này không hề bị hoen gỉ bởi tác động từ yếu tố thời tiết hoặc môi trường. Tận dụng những ưu điểm đó, Công ty Ánh Dương đã thiết kế và gia công sản xuất ra các mẫu khung cửa inox mới nhất với độ bền cao cao theo thời gian.</p>',
                'content'=>''
            ],
            
            [
                'id'=>20,
                'type'=>'cua-inox',
                'slug'=>'cua-inox-5',
                'image'=>'cua-inox-5.jpg',
                'images'=>[
                    0=>'cua-inox-5.jpg',
                    1=>'cua-inox-5-2.jpg',
                    2=>'cua-inox-5-3.jpg',
                    3=>'cua-inox-5-4.jpg',
                ],
                'title'=>'Khung cửa inox 1',
                'subTitle'=>'',
                'desc'=>'<p>Ngày nay, mẫu cửa này không chỉ đảm bảo về mặt chất lượng mà phải đảm bảo tính thẩm mỹ. Cửa kính cường lực khung inox giúp cho không gian trở nên thoáng hơn. Việc dùng kính cường lực sẽ lấy được ánh sáng tự nhiên, không gian trở nên sáng hơn.</p>',
                'content'=>'<h3>LÝ DO AN TOÀN</h3>
<p>Đây là một trong những ưu điểm nổi bật nhất của mẫu cửa này. Với cấu tạo từ các thanh inox có khối lượng nhẹ nhưng chắc chắn. Các thanh inox được gắn chắc chắn với nhau tạo thành phần khung vững chãi. Tránh được trường hợp va đập, các tác động bên ngoài.</p>

<p>Nếu bạn đang lo lắng về việc sử dụng kính cường lực sẽ dễ vỡ. Bạn hãy hoàn toàn yên tâm về vấn đề này nhé. Hiện nay, các tấm kính cường lực để làm cửa có chất lượng rất cao. Kính có độ cứng và độ bền tốt nên rất khó vỡ. Nếu trong trường hợp xấu nhất thì khi vỡ kính sẽ tan ra thành các mảnh nhỏ, không sắc nhọn.</p>

<h3>TUỔI THỌ CAO</h3>
<p>
Với các thanh inox chất lượng, được sơn các lớp bảo vệ nên khung cửa inox có độ bền cao. Bạn sẽ không còn phải lo ngại tới vấn đề cửa sẽ bị gỉ sét, bị mòn. Mẫu cửa này có thể chống chịu lại các tác động như mưa, gió, bão, các va đập… Nên tuổi thọ sử dụng cửa dài, tiết kiệm chi phí cho người dùng.</p>

<h3>BẢO ĐẢM TÍNH THẨM MỸ</h3>
<p>Ngày nay, mẫu cửa này không chỉ đảm bảo về mặt chất lượng mà phải đảm bảo tính thẩm mỹ. Cửa kính cường lực khung inox giúp cho không gian trở nên thoáng hơn. Việc dùng kính cường lực sẽ lấy được ánh sáng tự nhiên, không gian trở nên sáng hơn.</p>'
            ],
            //tran kim loai
            [
                'id'=>21,
                'type'=>'tran-kim-loai',
                'slug'=>'tran-kim-loai-6',
                'image'=>'tran-kim-loai-6.jpg',
                'images'=>[
                    0=>'tran-kim-loai-6.jpg',
                    1=>'tran-kim-loai-6-2.jpg',
                ],
                'title'=>'METALWORKS VECTOR and Vector Exterior',
                'subTitle'=>'',
                'desc'=>'',
                'content'=>''
            ],
            
            [
                'id'=>22,
                'type'=>'tran-kim-loai',
                'slug'=>'tran-kim-loai-2',
                'image'=>'tran-kim-loai-2.jpg?v=2',
                'images'=>[
                    0=>'tran-kim-loai-2.jpg?v=2',
                    1=>'tran-kim-loai-2-2.jpg?v=2',
                ],
                'title'=>'METALWORKS Linear - Classics',
                'subTitle'=>'',
                'desc'=>'',
                'content'=>''
            ],
            
            [
                'id'=>23,
                'type'=>'tran-kim-loai',
                'slug'=>'tran-kim-loai-3',
                'image'=>'tran-kim-loai-3.jpg',
                'images'=>[
                    0=>'tran-kim-loai-3.jpg',
                    1=>'tran-kim-loai-3-2.jpg',
                ],
                'title'=>'METALWORKS Linear - DIVERGE',
                'subTitle'=>'',
                'desc'=>'',
                'content'=>''
            ],
            
            [
                'id'=>24,
                'type'=>'tran-kim-loai',
                'slug'=>'tran-kim-loai-4',
                'image'=>'tran-kim-loai-4.jpg',
                'images'=>[
                    0=>'tran-kim-loai-4.jpg',
                    1=>'tran-kim-loai-4-2.jpg',
                ],
                'title'=>'METALWORKS IMMIX Linear',
                'subTitle'=>'',
                'desc'=>'',
                'content'=>''
            ],
            
            [
                'id'=>25,
                'type'=>'tran-kim-loai',
                'slug'=>'tran-kim-loai-5',
                'image'=>'tran-kim-loai-5.jpg',
                'images'=>[
                    0=>'tran-kim-loai-5.jpg',
                    1=>'tran-kim-loai-5-2.jpg',
                ],
                'title'=>'METALWORKS IMMIX Blades',
                'subTitle'=>'',
                'desc'=>'',
                'content'=>''
            ],
            
        ];
        return $sanPhamArray;
    }
}