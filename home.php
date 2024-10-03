  <section id="banner">
   
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>innovation</h3> 
          <p>We create the opportunities</p> 
           
                </div>
              </li>
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Specialize</h3> 
          <p>Success depends on work</p> 
           
                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->
 
  </section> 
  <section id="call-to-action-2">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <h3>Bermitra dengan Pemimpin Bisnis</h3>
          <p>Pengembangan hubungan strategis yang sukses, jangka panjang, antara pelanggan dan pemasok, berdasarkan pencapaian praktik terbaik dan keunggulan kompetitif yang berkelanjutan. Dalam model mitra bisnis, profesional SDM bekerja sama dengan para pemimpin bisnis dan manajer lini untuk mencapai tujuan organisasi bersama.</p>
        </div>
       <!--  <div class="col-md-2 col-sm-3">
          <a href="#" class="btn btn-primary">Read More</a>
        </div> -->
      </div>
    </div>
  </section>
  
  <section id="content">
  
  
  <div class="container">
        <div class="row">
      <div class="col-md-12">
        <div class="aligncenter"><h2 class="aligncenter">Perusahaan</h2><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. --></div>
        <br/>
      </div>
    </div>

    <?php 
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();


      foreach ($comp as $company ) {
        # code...
    
    ?>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-building-o"></i>
                <div class="info-blocks-in">
                    <h3><?php echo $company->COMPANYNAME;?></h3>
                    <!-- <p><?php echo $company->COMPANYMISSION;?></p> -->
                    <p>Alamat :<?php echo $company->COMPANYADDRESS;?></p>
                    <p>No Kontak :<?php echo $company->COMPANYCONTACTNO;?></p>
                </div>
            </div>

    <?php } ?> 
  </div>
  </section>
  
  <section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >Kategori Loker</h2>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php 
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }

          ?>
        </div>
      </div>
 
    </div>
  </section>    
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder">

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <div class="editContent">
          <h3>Tentang Kami</h3>
        </div>
        <div class="editContent"  style="height:235px;">
          <p> 
          &nbsp;&nbsp;Di LokerIT, kami berkomitmen untuk menjadi pusat sumber daya terkemuka bagi para profesional IT yang mencari peluang karir yang memacu ambisi dan memungkinkan pertumbuhan maksimal. Sebagai komunitas yang berfokus pada industri teknologi informasi yang berkembang pesat, kami menyajikan informasi terkini, lowongan pekerjaan menarik, dan sumber daya karir yang mendalam.<br/><br/>

          &nbsp;&nbsp;Kami mendedikasikan diri untuk menjadi katalisator bagi inovasi. Dengan menjembatani para profesional IT dengan perusahaan-perusahaan yang memimpin tren, kami membantu menciptakan ekosistem di mana ide-ide baru dapat berkembang.<br/><br/>

          &nbsp;&nbsp;Bergabunglah dengan perusahaan-perusahaan pacesetter yang berkomitmen pada pertumbuhan dan perkembangan karyawan mereka. Kami menjalin kemitraan dengan perusahaan-perusahaan top yang memiliki budaya kerja inklusif dan memberdayakan setiap individu. </p>
        </div> 
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section>
  
  <div class="about home-about">
        <div class="container">
            
            <div class="row">
              <div class="col-md-4">
                <!-- Heading and para -->
                <div class="block-heading-two">
                  <h3><span>Bergabunglah dengan Komunitas Kami</span></h3>
                </div>
                <p>Temukan peluang-peluang menarik, jalin hubungan dengan sesama profesional IT, dan dorong batasan kemungkinan karir Anda. Bergabunglah dengan kami di perjalanan menuju kesuksesan dalam dunia yang terus berubah ini. Mari bersama-sama menciptakan masa depan teknologi informasi yang menginspirasi! <br><br></p>
              </div>
              
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Testimoni</span></h3>
                </div>  
                     <div class="testimonials">
                    <div class="active item">
                      <blockquote><p>"LokerIT tidak hanya memberikan saya akses ke peluang karir terbaik di industri teknologi informasi, tetapi juga menjadi sumber inspirasi dan wawasan berharga. Saya berhasil menemukan pekerjaan yang sesuai dengan minat dan keahlian saya, dan saya benar-benar merasa didukung dalam perjalanan pengembangan karir saya."</p></blockquote>
                      <div class="carousel-info">
                      <img alt="" src="theme/aditya.png" class="pull-left">
                      <div class="pull-left">
                        <span class="testimonials-name">Aditya</span>
                        <span class="testimonials-post">Analis Keamanan Sistem</span>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
              
            </div>
           
            </div>
            
          </div>