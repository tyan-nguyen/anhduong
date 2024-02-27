<header>
    <div class="header-top header-top-basic">
        <div class="container">
            <div class="header-top-wrap">
                <a href="https://tmu.edu.vn" class="header-logo">
                    <img src="/dbcl/images/logo2.png" alt="" class="img-fluid logo-head" />
                    <div class="name">
                        <h2>Phòng Đảm bảo Chất lượng</h2>
                        <h3>Quality Assurance Department</h3>
                    </div>
                </a>
                <div class="box-search">
                    <form action="https://khaothi.tmu.edu.vn/search" id="formHome" class="search-form">
                        <button type="submit">
                            <span class="icon">
                                <img src="https://khaothi.tmu.edu.vn/template_dhtm/images/ic-search.png" alt="" width="20" height="20" class="img-fluid">
                            </span>
                        </button>
                        <input type="text" name="key" value="" class="keyword-search" placeholder="Tìm kiếm"></form>
                </div>
                <div class="language">
                    <a href="javascript:;" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="langitem current-lang">
                            <span class="icon">
                                <img src="https://khaothi.tmu.edu.vn/html/images/ic-f-vn.png" alt="VIE" class="img-fluid">
                            </span>
                            VIE</div>
                        <span class="icon-dropdown">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9465 5.45337H7.79316H4.05317C3.41317 5.45337 3.09317 6.2267 3.5465 6.68004L6.99983 10.1334C7.55317 10.6867 8.45317 10.6867 9.0065 10.1334L10.3198 8.82003L12.4598 6.68004C12.9065 6.2267 12.5865 5.45337 11.9465 5.45337Z" fill="white" />
                            </svg>
                        </span>
                    </a>
                    <ul class="dropdown-box dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a class="langitem" href="https://khaothi.tmu.edu.vn/localizations/change-language/vi">
                                <span class="icon">
                                    <img src="https://khaothi.tmu.edu.vn/template_dhtm/images/lang-vie.png" alt="" class="img-fluid">
                                </span>
                                VIE
                            </a></li>
                        <li>
                            <a class="langitem" href="https://khaothi.tmu.edu.vn/localizations/change-language/en">
                                <span class="icon">
                                    <img src="https://khaothi.tmu.edu.vn/template_dhtm/images/lang-eng.png" alt="" class="img-fluid">
                                </span>
                                ENG
                            </a></li>
                    </ul>
                </div>
               
			<?= $this->render('_mobile_menu') ?>
           
            </div>
        </div>
    </div>
    
    <?= $this->render('_desktop_menu') ?>
    
</header>