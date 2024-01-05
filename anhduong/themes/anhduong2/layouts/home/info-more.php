
<section class="elementor-section elementor-top-section elementor-element elementor-element-d683bc5 elementor-section-full_width bloc-business-cases elementor-section-height-default elementor-section-height-default" data-id="d683bc5" data-element_type="section">
  <div class="elementor-container elementor-column-gap-no">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-25f8e1c" data-id="25f8e1c" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-33b5678 elementor-widget elementor-widget-text-editor" data-id="33b5678" data-element_type="widget" data-widget_type="text-editor.default">
          <div class="elementor-widget-container">
            <div class="business-cases-container template-1">
              <div class="business-cases">
              
              
                <div class="business-cases__item">
                  <div class="business-cases__item-infoholder">
                    <div class="business-cases__item-infoholder-inner">
                      <h3>Dự án công trình giáo dục</h3>
                    </div>
                  </div>
                  <!-- .business-cases__item-infoholder -->
                  
                  <div class="business-cases__item-photo template-1 " data-count="1"> 
                    <!-- full 3 photos -->
                    <div class="business-cases__item-photo__col">
                      <div class="business-cases__item-photo__col-item fix-one">
                        <img decoding="async" width="1024" height="682" src="/anhduong2/images/info-2.jpg" class="attachment-large size-large" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- .business-cases__item-photo --> 
                </div>
                
                <div class="business-cases__item">
                  <div class="business-cases__item-infoholder">
                    <div class="business-cases__item-infoholder-inner">
                      <h3>Dự án khách sạn</h3>
                    </div>
                  </div>
                  <!-- .business-cases__item-infoholder -->
                  
                  <div class="business-cases__item-photo template-1 " data-count="1"> 
                    <!-- full 3 photos -->
                    <div class="business-cases__item-photo__col">
                      <div class="business-cases__item-photo__col-item fix-one">
                        <img decoding="async" width="1024" height="682" src="/anhduong2/images/du-an-khach-san.jpg?v=1" class="attachment-large size-large" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- .business-cases__item-photo --> 
                </div>
                
                
                <div class="business-cases__item">
                  <div class="business-cases__item-infoholder">
                    <div class="business-cases__item-infoholder-inner">
                      <h3>Dự án công trình nghệ thuật</h3>
                      <h3 style="color:#5f2869">SẢNH THANG MÁY</h3>
                    </div>
                  </div>
                  <!-- .business-cases__item-infoholder -->
                  
                  <div class="business-cases__item-photo template-1 " data-count="1"> 
                    <!-- full 3 photos -->
                    <div class="business-cases__item-photo__col">
                      <div class="business-cases__item-photo__col-item fix-one">
                        <img decoding="async" width="1024" height="682" src="/anhduong2/images/du-an-cong-trinh-nghe-thuat.jpg" class="attachment-large size-large" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- .business-cases__item-photo --> 
                </div>
                
                <div class="business-cases__item">
                  <div class="business-cases__item-infoholder">
                    <div class="business-cases__item-infoholder-inner">
                      <h3>Dự án công trình công cộng</h3>
                    </div>
                  </div>
                  <!-- .business-cases__item-infoholder -->
                  
                  <div class="business-cases__item-photo template-1 " data-count="1"> 
                    <!-- full 3 photos -->
                    <div class="business-cases__item-photo__col">
                      <div class="business-cases__item-photo__col-item fix-one">
                        <img decoding="async" width="1024" height="682" src="/anhduong2/images/du-an-cong-trinh-cong-cong.jpg?v=1" class="attachment-large size-large" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- .business-cases__item-photo --> 
                </div>
                
                <div class="business-cases__item">
                  <div class="business-cases__item-infoholder">
                    <div class="business-cases__item-infoholder-inner">
                      <h3>Dự án công trình khu phức hợp</h3>
                    </div>
                  </div>
                  <!-- .business-cases__item-infoholder -->
                  
                  <div class="business-cases__item-photo template-1 " data-count="1"> 
                    <!-- full 3 photos -->
                    <div class="business-cases__item-photo__col">
                      <div class="business-cases__item-photo__col-item fix-one">
                        <img decoding="async" width="1024" height="682" src="/anhduong2/images/du-an-cong-trinh-khu-phut-hop.jpg?v=3" class="attachment-large size-large" alt="" />
                      </div>
                    </div>
                  </div>
                  <!-- .business-cases__item-photo --> 
                </div>
                
                
                
              </div>
            </div>
            <script>   
// return;
jQuery(document).ready(function() {

    if(jQuery('.business-cases').length == 0) return;
    
    jQuery('.business-cases').not('.slick-initialized').slick({
        arrows: false,
        dots: false,     
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,   
        autoplay: true,
        autoplaySpeed: 3000     
    });

    var BUSINESS_SLIDER = '.business-cases';
    var BUSINESS_SLIDER_CONTAINER = '.business-cases-container';
    
    if (jQuery(BUSINESS_SLIDER).length > 0) {
        
        jQuery(BUSINESS_SLIDER_CONTAINER).find(".info-next").click(function() {
            jQuery(BUSINESS_SLIDER).slick("slickNext");
            return false;
        });
    
    
    
        jQuery(BUSINESS_SLIDER_CONTAINER).find(".info-prev").click(function() {
            jQuery(BUSINESS_SLIDER).slick("slickPrev");
            return false;
        });
       
    }

    
});
</script> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
