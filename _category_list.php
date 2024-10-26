<div class="menu_siralama">
    <div class="img_area">
        <a class="btn_menu_close zortMenu"><img src="assets/image/icons/cancel.png" width="60" height="60" alt="Aktif Emlak Hamburger"></a>
    </div>
    <!-- Masaüstü görünüm -->
    <ul class="desktop-menu">
        <li>
            <a href="#" title="Gelişmiş Sıralama">Gelişmiş Sıralama 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <!-- SVG içeriği buraya gelecek -->
                </svg>
            </a>
        </li>
        <li>
            <a href="#" title="Düşük fiyat">Düşük fiyat 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <!-- SVG içeriği buraya gelecek -->
                </svg>
            </a>
        </li>
        <li>
            <a href="#" title="Yüksek Fiyat">Yüksek Fiyat 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M6.66602 4.00056C6.48921 4.00056 6.31964 4.0708 6.19461 4.19582C6.06959 4.32084 5.99935 4.49041 5.99935 4.66723L5.99935 12.3939L4.47268 10.8606C4.34715 10.735 4.17688 10.6645 3.99935 10.6645C3.82182 10.6645 3.65155 10.735 3.52602 10.8606C3.40048 10.9861 3.32996 11.1564 3.32996 11.3339C3.32996 11.5114 3.40048 11.6817 3.52602 11.8072L6.19268 14.4739C6.28643 14.5664 6.40548 14.6291 6.53481 14.654C6.66413 14.6789 6.79794 14.6649 6.91935 14.6139C7.0411 14.5639 7.14531 14.4789 7.21887 14.3698C7.29243 14.2607 7.33203 14.1322 7.33268 14.0006L7.33268 4.66723C7.33268 4.49041 7.26245 4.32084 7.13742 4.19582C7.0124 4.0708 6.84283 4.00056 6.66602 4.00056ZM9.07935 1.38722C8.9576 1.43724 8.85339 1.52217 8.77983 1.63132C8.70627 1.74046 8.66667 1.86894 8.66602 2.00056L8.66602 11.3339C8.66602 11.5107 8.73626 11.6803 8.86128 11.8053C8.9863 11.9303 9.15587 12.0006 9.33268 12.0006C9.50949 12.0006 9.67906 11.9303 9.80409 11.8053C9.92911 11.6803 9.99935 11.5107 9.99935 11.3339L9.99935 3.60723L11.526 5.14056C11.588 5.20304 11.6617 5.25264 11.743 5.28649C11.8242 5.32033 11.9113 5.33776 11.9994 5.33776C12.0874 5.33776 12.1745 5.32033 12.2557 5.28649C12.337 5.25264 12.4107 5.20304 12.4727 5.14056C12.5352 5.07858 12.5848 5.00485 12.6186 4.92361C12.6525 4.84237 12.6699 4.75523 12.6699 4.66723C12.6699 4.57922 12.6525 4.49208 12.6186 4.41084C12.5848 4.3296 12.5352 4.25587 12.4727 4.19389L9.80602 1.52723C9.71227 1.43472 9.59322 1.37206 9.46389 1.34714C9.33457 1.32222 9.20076 1.33617 9.07935 1.38722Z" fill="#186089"></path>                </svg>
            </a>
        </li>
        <li>
            <a href="#" title="Tarihe göre Yeni">Tarihe göre Yeni 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <!-- SVG içeriği buraya gelecek -->
                </svg>
            </a>
        </li>
        <li>
            <a href="#" title="Tarihe göre Eski">Tarihe göre Eski 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <!-- SVG içeriği buraya gelecek -->
                </svg>
            </a>
        </li>
    </ul>
    <!-- Mobil görünüm -->
    <select class="mobile-menu">
        <option value="#">Gelişmiş Sıralama</option>
        <option value="#">Düşük fiyat</option>
        <option value="#">Yüksek Fiyat</option>
        <option value="#">Tarihe göre Yeni</option>
        <option value="#">Tarihe göre Eski</option>
    </select>
</div>
<style>
    /* Masaüstü görünüm */
.desktop-menu {
    display: block;
}

.desktop-menu svg {
    display: inline;
}

.mobile-menu {
    display: none;
}

/* Mobil görünüm */
@media (max-width: 768px) {
    .desktop-menu {
        display: none;
    }
    .mobile-menu {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 16px;
    }
}
 
.search-form {
  width: 300px;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.search-input {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.toggle-buttons {
  display: flex;
  justify-content: space-between;
  margin-bottom: 15px;
}

.toggle {
  width: 48%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  cursor: pointer;
  background-color: #f9f9f9;
  color: #333;
}

.toggle.active {
  background-color: #0073e6;
  color: white;
  border-color: #0073e6;
}

.dropdown {
  margin-bottom: 15px;
}

.dropdown label {
  display: block;
  margin-bottom: 5px;
  color: #333;
  font-weight: bold;
}

.dropdown select, .input-group input {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.input-group {
  display: flex;
  justify-content: space-between;
  margin-bottom: 15px;
}

.input-group label {
  flex-basis: 100%;
  margin-bottom: 5px;
  color: #333;
  font-weight: bold;
}

.input-group input {
  width: 48%;
}

.search-button {
  width: 100%;
  padding: 12px;
  background-color: #0073e6;
  color: white;
  font-weight: bold;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.search-button:hover {
  background-color: #005bb5;
}

</style>

<section class="category_list">
    <div class="container">
        <div class="row justify-content-between align-items-center cate_text">
            <div class="col-lg-5">
                <div class="text"><span class="black">“Satılık Ev”</span> aramanızda <span class="blue">123.456</span> ilan bulundu</div>
            </div>
            <div class="col-lg-7 d-flex justify-content-lg-end justify-content-md-start justify-content-center mt-lg-0 mt-xl-4 mt-3 special_buttons">
                <div class="form-group d-md-none d-flex">
                    <a id="filter_button" class="openFilterMenu" title="Filtreler">Filtreler</a>
                </div>
                <a href="#" title="Aramayı Kaydet" class="aramayi_kaydet d-md-flex d-none"><span>Aramayı Kaydet</span><img src="assets/image/icons/star_item.png" width="16" height="16" alt="Aramayı Kaydet"></a>
                <a style="cursor:pointer;" class="cat_button grid_button grd_button d-md-flex d-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M8.5 1H1.96154C1.4305 1 1 1.4305 1 1.96154V8.5C1 9.03104 1.4305 9.46154 1.96154 9.46154H8.5C9.03104 9.46154 9.46154 9.03104 9.46154 8.5V1.96154C9.46154 1.4305 9.03104 1 8.5 1Z" stroke="#186089" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20.0385 1H13.5C12.9689 1 12.5385 1.4305 12.5385 1.96154V8.5C12.5385 9.03104 12.9689 9.46154 13.5 9.46154H20.0385C20.5695 9.46154 21 9.03104 21 8.5V1.96154C21 1.4305 20.5695 1 20.0385 1Z" stroke="#186089" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.5 12.5385H1.96154C1.4305 12.5385 1 12.9689 1 13.5V20.0385C1 20.5695 1.4305 21 1.96154 21H8.5C9.03104 21 9.46154 20.5695 9.46154 20.0385V13.5C9.46154 12.9689 9.03104 12.5385 8.5 12.5385Z" stroke="#186089" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20.0385 12.5385H13.5C12.9689 12.5385 12.5385 12.9689 12.5385 13.5V20.0385C12.5385 20.5695 12.9689 21 13.5 21H20.0385C20.5695 21 21 20.5695 21 20.0385V13.5C21 12.9689 20.5695 12.5385 20.0385 12.5385Z" stroke="#186089" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
                <a style="cursor:pointer;" class="cat_button grid_button brd_button d-md-flex d-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="19" viewBox="0 0 22 19" fill="none">
                        <path d="M19.75 1H2.25C1.55964 1 1 1.55964 1 2.25V6C1 6.69036 1.55964 7.25 2.25 7.25H19.75C20.4404 7.25 21 6.69036 21 6V2.25C21 1.55964 20.4404 1 19.75 1Z" stroke="#186089" stroke-linejoin="round"/>
                        <path d="M19.75 12.25H2.25C1.55964 12.25 1 12.8096 1 13.5V17.25C1 17.9404 1.55964 18.5 2.25 18.5H19.75C20.4404 18.5 21 17.9404 21 17.25V13.5C21 12.8096 20.4404 12.25 19.75 12.25Z" stroke="#186089" stroke-linejoin="round"/>
                    </svg>
                </a>
                <a href="#" title="Sıralama" class="aramayi_kaydet renk_pasif zortMenu"><span>Sıralama</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M13.0686 5.15796L8.38358 9.76896C8.28136 9.87009 8.14337 9.92681 7.99958 9.92681C7.85579 9.92681 7.7178 9.87009 7.61558 9.76896L2.93058 5.15896C2.82773 5.05789 2.68929 5.00125 2.54508 5.00125C2.40087 5.00125 2.26244 5.05789 2.15958 5.15896C2.10893 5.20834 2.06868 5.26736 2.0412 5.33253C2.01371 5.39771 1.99955 5.46773 1.99955 5.53846C1.99955 5.6092 2.01371 5.67922 2.0412 5.74439C2.06868 5.80957 2.10893 5.86859 2.15958 5.91796L6.84358 10.528C7.1521 10.8309 7.5672 11.0006 7.99958 11.0006C8.43196 11.0006 8.84706 10.8309 9.15558 10.528L13.8396 5.91796C13.8904 5.86857 13.9308 5.80949 13.9583 5.74423C13.9859 5.67896 14.0001 5.60882 14.0001 5.53796C14.0001 5.46711 13.9859 5.39697 13.9583 5.33171C13.9308 5.26644 13.8904 5.20736 13.8396 5.15796C13.7367 5.05689 13.5983 5.00025 13.4541 5.00025C13.3099 5.00025 13.1714 5.05689 13.0686 5.15796Z" fill="#011E2E" fill-opacity="0.3"/>
                </svg></a>
                <a href="#" title="Fiyat" class="aramayi_kaydet"><span>Fiyat</span><img src="assets/image/icons/arrow_rv.png" class="d-md-none d-flex" style="margin-left: 5px; width:10px;" alt=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M6.66602 4.00056C6.48921 4.00056 6.31964 4.0708 6.19461 4.19582C6.06959 4.32084 5.99935 4.49041 5.99935 4.66723L5.99935 12.3939L4.47268 10.8606C4.34715 10.735 4.17688 10.6645 3.99935 10.6645C3.82182 10.6645 3.65155 10.735 3.52602 10.8606C3.40048 10.9861 3.32996 11.1564 3.32996 11.3339C3.32996 11.5114 3.40048 11.6817 3.52602 11.8072L6.19268 14.4739C6.28643 14.5664 6.40548 14.6291 6.53481 14.654C6.66413 14.6789 6.79794 14.6649 6.91935 14.6139C7.0411 14.5639 7.14531 14.4789 7.21887 14.3698C7.29243 14.2607 7.33203 14.1322 7.33268 14.0006L7.33268 4.66723C7.33268 4.49041 7.26245 4.32084 7.13742 4.19582C7.0124 4.0708 6.84283 4.00056 6.66602 4.00056ZM9.07935 1.38722C8.9576 1.43724 8.85339 1.52217 8.77983 1.63132C8.70627 1.74046 8.66667 1.86894 8.66602 2.00056L8.66602 11.3339C8.66602 11.5107 8.73626 11.6803 8.86128 11.8053C8.9863 11.9303 9.15587 12.0006 9.33268 12.0006C9.50949 12.0006 9.67906 11.9303 9.80409 11.8053C9.92911 11.6803 9.99935 11.5107 9.99935 11.3339L9.99935 3.60723L11.526 5.14056C11.588 5.20304 11.6617 5.25264 11.743 5.28649C11.8242 5.32033 11.9113 5.33776 11.9994 5.33776C12.0874 5.33776 12.1745 5.32033 12.2557 5.28649C12.337 5.25264 12.4107 5.20304 12.4727 5.14056C12.5352 5.07858 12.5848 5.00485 12.6186 4.92361C12.6525 4.84237 12.6699 4.75523 12.6699 4.66723C12.6699 4.57922 12.6525 4.49208 12.6186 4.41084C12.5848 4.3296 12.5352 4.25587 12.4727 4.19389L9.80602 1.52723C9.71227 1.43472 9.59322 1.37206 9.46389 1.34714C9.33457 1.32222 9.20076 1.33617 9.07935 1.38722Z" fill="#186089"/>
                </svg></a>
            </div>
            <div class="col-12 filter_area_btn justify-content-end d-xl-none d-md-flex d-none">
                <a id="filter_button" class="openFilterMenu" title="Filtreler">Filtreler</a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-xl-3 item_input_area">
                <div class="img_area d-xl-none d-flex">
                    <a class="btn_menu_close openFilterMenu">Kapat<img src="assets/image/icons/cancel.png" width="15" height="15"  alt="Aktif Emlak Hamburger"></a>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Arama" name="search">
                </div>
                <div class="form-container">
                <input type="text" placeholder="Hızlı Arama" class="search-input">
  
  <div class="toggle-buttons">
    <button class="toggle active">SATILIK</button>
    <button class="toggle">KİRALIK</button>
  </div>
  
  <div class="dropdown">
    <label for="city">Konum</label>
    <select id="city" onchange="loadDistricts()">
      <option value="">İl Seçimi</option>
      <!-- Şehirler buraya yüklenecek -->
    </select>
    <select id="district" onchange="loadNeighborhoods()">
      <option value="">İlçe</option>
      <!-- Dinamik ilçeler buraya yüklenecek -->
    </select>
    <select id="neighborhood">
      <option value="">Mahalle</option>
      <!-- Dinamik mahalleler buraya yüklenecek -->
    </select>
</div>
  
  <div class="dropdown">
    <label for="category">Kategoriler</label>
    <select id="category">
      <option>Kategori Seçin</option>
    </select>
    <select>
      <option>İşyeri Tipi Seçin</option>
    </select>
  </div>
  
  <div class="input-group">
    <label>Fiyat</label>
    <input type="text" placeholder="Min TL">
    <input type="text" placeholder="Max TL">
  </div>
  
  <div class="input-group">
    <label>m2 (Brüt)</label>
    <input type="text" placeholder="Min m2">
    <input type="text" placeholder="Max m2">
  </div>
  
  <div class="dropdown">
    <label for="swap">Takas</label>
    <select id="swap">
      <option>Tümü</option>
    </select>
  </div>
  
  <div class="dropdown">
    <label for="credit">Krediye Uygun</label>
    <select id="credit">
      <option>Tümü</option>
    </select>
  </div>
  
  <button class="search-button">ARA</button>
                </div>

            </div>
            <div class="col-xl-9 item_col-9_area">
                <div class="row">
                    <?php for($i=0; $i<=4; $i++){ ?>
                        <div class="asivus col-xl-12 mb-4">
                            <div class="assive">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 for_col_6">
                                        <div class="img_uruns" style="background-image:  url(assets/image/urunler/urun_img_1.jpg);">
                                            <div class="d-flex list_btns">
                                                <span class="cat one_cikan">ÖNE ÇIKAN</span>
                                                <span class="cat">SATILIK</span>
                                                <span class="cat btns_cat dnone_grid_for">
                                                    <a href="#" title="">
                                                        <img src="assets/image/icons/svg_area.svg" width="20" height="20" class="btn_area">
                                                    </a>
                                                    <a href="#" title="">
                                                        <img src="assets/image/icons/hearth.svg" width="20" height="20" class="btn_area"> 
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="d-flex list_btns locate">
                                                <span class="cat item_type">KONUT</span>
                                                <span class="cat btns_cat dnone_for_grid">
                                                    <a href="#" title="">
                                                        <img src="assets/image/icons/svg_area.svg" width="20" height="20" class="btn_area">
                                                    </a>
                                                    <a href="#" title="">
                                                        <img src="assets/image/icons/hearth.svg" width="20" height="20" class="btn_area"> 
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-sm-6 for_col_8 d-flex flex-column justify-content-md-center justify-content-md-start" style="position:relative;">
                                        <h4 class="title_super">Lorem ipsum dolor sit amet consectetur pellentesque.</h4>
                                            <p class="text">Lorem ipsum dolor sit amet consectetur. Lacus lobortis sed nisi tempor in a diam fames. Ullamcorper feugiat vestibulum eleifend sollicitudin aliquet risus. Augue vestibulum ac purus interdum dictumst ipsum nulla eu vestibulum. Tellus fringilla quam posuere sit enim facilisi eu volutpat. Proin dolor a auctor vel semper.</p>
                                            <div class="adress">
                                                <img src="assets/image/icons/adres.png" width="24" height="24" alt="Apt. 910 665 Lemke Loop, Hyofort, CO 06237-7979">
                                                <span>Apt. 910 665 Lemke Loop, Hyofort, 
                                                CO 06237-7979</span>
                                            </div>
                                            <div class="d-flex item_features">
                                                <div class="d-lg-flex d-none feature_list">
                                                <div class="feature">
                                                    <div class="img">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="21" viewBox="0 0 23 21" fill="none">
                                                            <path d="M21.6 15.284H1M21.6 15.284L19.3 8.18404H3.30002L1 15.284M21.6 15.284V20.084H18.4V18.384H4.20001V20.084H1V15.284M19.3 8.08404V3.28403C19.3 2.28403 18.5 1.38403 17.4 1.38403H5.10001C4.10001 1.38403 3.20001 2.18403 3.20001 3.28403V8.08404M11.3 8.08404V6.48403M11.3 6.48403C11.3 5.68403 10.6 4.98403 9.80002 4.98403H8.10001C7.30001 4.98403 6.60001 5.68403 6.60001 6.48403V8.08404M11.3 6.48403C11.3 5.68403 12 4.98403 12.8 4.98403H14.5C15.3 4.98403 16 5.68403 16 6.48403V8.08404" stroke="#C8D6DF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span>Oda</span>
                                                        <span>2+1</span>
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="17" viewBox="0 0 32 17" fill="none">
                                                        <path d="M29.2001 5.23423C29.2001 9.73423 25.5001 13.4342 21.0001 13.4342H11.7001C7.2001 13.4342 3.50009 9.73423 3.50009 5.23423M1.6001 5.23423H31.0001M10.4001 13.3342L7.6001 16.1342M22.3001 13.3342L25.1001 16.1342M9.6001 2.93423C9.6001 2.03423 8.90009 1.33423 8.00009 1.33423H7.90012C7.00012 1.33423 6.30011 2.03423 6.30011 2.93423V5.23423" stroke="#C8D6DF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span>Banyo</span>
                                                        <span>2+1</span>
                                                    </div>
                                                </div>
                                                <div class="feature">
                                                    <div class="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                                                        <path d="M25.2 13.684H21.3V24.084H4.90002V13.684H1L13.1 1.38403L25.2 13.684ZM13.1 13.384C12.2 10.984 8.6 11.484 8.5 13.984C8.5 17.284 12 17.784 13.1 19.384C14.2 17.684 17.7 17.184 17.7 13.984C17.6 11.484 14 10.984 13.1 13.384Z" stroke="#C8D6DF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span>Bina Yaşı</span>
                                                        <span>2+1</span>
                                                    </div>
                                                </div>
                                                <div class="feature ftr_risk">
                                                    <div class="img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="23" viewBox="0 0 14 23" fill="none">
                                                        <path d="M5.19995 8.33412H4.19995M5.19995 11.1341H4.19995M5.19995 13.8341H4.19995M9.49994 8.33412H8.49994M9.49994 11.1341H8.49994M9.49994 13.8341H8.49994M8.3999 21.7341V17.4341H5.3999V21.7341M12.4999 21.7341H1.19995V5.43413L6.79993 1.73413L12.3999 5.43413V21.7341H12.4999Z" stroke="#C8D6DF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span>Kat Sayısı</span>
                                                        <span>2+1</span>
                                                    </div>
                                                </div>
                                                <div class="feature ftr_risk">
                                                    <div class="img">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="23" viewBox="0 0 25 23" fill="none">
                                                            <path d="M12.6 22.0999H1.5V11.5999L12.6 5.69989V22.0999ZM12.6 22.0999H23.7V7.2999L12.6 1.3999V22.0999ZM8.7 22.0999V15.7999H5.3V22.0999M19.8 22.0999V15.7999H16.4V22.0999M22.3 6.59991V1.69989H19.9V5.2999" stroke="#C8D6DF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span>Bulunduğu Kat</span>
                                                        <span>2+1</span>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="price_area">
                                                    <span>12.200.000 ₺</span>
                                                </div>
                                                <div class="adress_items d-md-none d-flex">
                                                    <span>Balıkesir / Edremit / Altınkum</span>
                                                </div>
                                                <div class="adress_items share_items d-md-none d-flex">
                                                    <a href="#" title="Paylaş"><span>Paylaş</span></a>
                                                </div>
                                            </div>
                                            <a href="satilik_ilan_detay.php" title="" style="position:absolute; width:100%; height:100%; right:0; left:0;"></a>
                                    </div>
                                    <div class="col-12 d-md-none d-flex justify-content-start just_list_fetures">
                                        <div class="sube_name_areas mt-2">
                                            <div class="imgBox">
                                                <img src="assets/image/logo.png" width="30" height="30" alt="">
                                            </div>
                                            <h5>Akçay Şube</h5>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="sube_name_areas arama_icotmkas">
                                                    <img src="assets/image/icons/ic_round-phone.png" style="margin-right:5px;" width="24" height="24" alt="">
                                                <h5>Ara</h5>
                                            </a>
                                            <a href="#" class="sube_name_areas arama_icotmkas ortam_readfsam">
                                                    <img src="assets/image/icons/tabler_message.png" style="margin-right:5px;" width="24" height="24" alt="">
                                                <h5>Mesaj</h5>
                                            </a>
                                            <a href="#" class="sube_name_areas arama_icotmkasim">
                                                    <img src="assets/image/icons/ic_baseline-whatsapp.png" width="24" height="24" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="pagination col-12 d-flex flex-column align-items-center">
                        <div class="txt_info s1">Toplam <span>123.456</span> ilan bulundu 1. sayfayı görmektesiniz.</div>
                        <div class="d-flex pag_buttons mt-4">
                            <a href="#" class="pag_button s1 active" title="1. Sayfa">1</a>
                            <a href="#" class="pag_button s1" title="2. Sayfa">2</a>
                            <a href="#" class="pag_button s1" title="3. Sayfa">3</a>
                            <a href="#" class="pag_button s1" title="4. Sayfa">4</a>
                            <a href="#" class="pag_button s1" title="5. Sayfa">5</a>
                            <a href="#" class="pag_button s1" title="Sonraki Sayfa">Sonraki</a>
                        </div>
                    </div>
                    <div class="fav_arama col-12">
                        <div class=" d-flex flex-column align-items-center">
                            <div class="s1 fav_title">Favori Aramalarım</div>
                            <div class="s1 fav_text"><span>“Satılık Ev”</span> listesine yeni bir ilan eklendiğinde size 
                            anında haber vermemizi ister misiniz?</div>
                            <a href="#" title="Aramayı Kaydet" class="d-flex align-items-center arama_kaydet">Aramayı Kaydet <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_4542_34389)">
                                    <path d="M11.0625 9.79688L13 16L8 12.1562L3 16L4.9375 9.79688L0 6H6.125L8 0L9.875 6H16L11.0625 9.79688ZM11.1016 13.2812C10.9036 12.6354 10.7057 11.9948 10.5078 11.3594C10.3099 10.724 10.1068 10.0807 9.89844 9.42969C10.4349 9.02865 10.9635 8.625 11.4844 8.21875C12.0052 7.8125 12.5312 7.40625 13.0625 7H9.14062L8 3.35156L6.85938 7H2.9375C3.46875 7.40625 3.99479 7.8125 4.51562 8.21875C5.03646 8.625 5.5651 9.02865 6.10156 9.42969C5.89323 10.0755 5.6901 10.7161 5.49219 11.3516C5.29427 11.987 5.09635 12.6302 4.89844 13.2812L8 10.8906L11.1016 13.2812Z" fill="#F4F4F4"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4542_34389">
                                    <rect width="16" height="16" fill="white"/>
                                    </clipPath>
                                </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<script>
  // Türkiye şehir listesi ile dolu bir array
  const cities = [
    { id: 1, name: "İstanbul" },
    { id: 2, name: "Ankara" },
    { id: 3, name: "İzmir" },
    // Diğer şehirler...
  ];

  // Şehirleri dropdown'a yükleme
  window.onload = function () {
    const citySelect = document.getElementById('city');
    cities.forEach(city => {
      const option = document.createElement('option');
      option.value = city.id;
      option.textContent = city.name;
      citySelect.appendChild(option);
    });
  };

  // İlçe yükleme fonksiyonu (örnek API isteği)
  function loadDistricts() {
    const cityId = document.getElementById('city').value;
    fetch(`/api/districts?cityId=${cityId}`)
      .then(response => response.json())
      .then(districts => {
        const districtSelect = document.getElementById('district');
        districtSelect.innerHTML = '<option value="">İlçe</option>';
        districts.forEach(district => {
          const option = document.createElement('option');
          option.value = district.id;
          option.textContent = district.name;
          districtSelect.appendChild(option);
        });
      });
  }

  // Mahalle yükleme fonksiyonu (örnek API isteği)
  function loadNeighborhoods() {
    const districtId = document.getElementById('district').value;
    fetch(`/api/neighborhoods?districtId=${districtId}`)
      .then(response => response.json())
      .then(neighborhoods => {
        const neighborhoodSelect = document.getElementById('neighborhood');
        neighborhoodSelect.innerHTML = '<option value="">Mahalle</option>';
        neighborhoods.forEach(neighborhood => {
          const option = document.createElement('option');
          option.value = neighborhood.id;
          option.textContent = neighborhood.name;
          neighborhoodSelect.appendChild(option);
        });
      });
  }
</script>