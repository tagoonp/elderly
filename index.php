<?php
session_start();

include "xplor-config.php";
include "xplor-connect.php";

$db = new database();
$db->connect();
$tbPrefix = $db->getTablePrefix();

$default_lang = 'th';

include "controller/fetch-config.php";


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content=All name=ROBOTS>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="สถานวิจัยระบบการดูแลผู้สูงอายุไทย - Research Center for Causing System of Thai Elderly คณะพยาบาลศาสตร์ มหาวิทยาลัยสงขลานครินทร์" name=description>
    <meta content="ผู้สูงอายุ สถานวิจัยระบบการดูแลผู้สูงอายุไทย Research Center for Causing System of Thai Elderly คณะพยาบาลศาสตร์ มหาวิทยาลัยสงขลานครินทร์ ม.อ." name=keywords />


    <title><?php echo $default_title; ?></title>

    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400,500" rel="stylesheet">

    <!-- Plugin -->
    <link rel="stylesheet" href="ext-lib/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="ext-lib/owl-carousel/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="ext-lib/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/custom-css.css" >


  </head>
  <body>
    <header>
      <div class="navbar-custom">
        <div class="container thfont">
          <div class="row">
            <div class="col-sm-6 font-300">
              <?php
              if($default_lang=='th')
                echo "ข้อมูลิดต่อ";
              else
                echo "Contact info";
              ?>&nbsp;&nbsp;:&nbsp;&nbsp;<i class="fa fa-phone"></i> <?php echo $default_phone;?>&nbsp;&nbsp;:&nbsp;&nbsp;<i class="fa fa-fax" aria-hidden="true"></i> <?php echo $default_fax;?>
            </div>
            <div class="col-sm-6 text-right">
              <?php
              if($default_lang=='th')
                echo "เลือกภาษา";
              else
                echo "Choose language";
              ?>&nbsp;&nbsp;
              <a href="index.php?lang=th"><img src="media/th.jpg" alt="" /></a>
              <a href="index.php?lang=en"><img src="media/uk.jpg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="header">
        <div class="container btimh">
          <div class="row">
            <div class="col-sm-6">
              <img src="media/logo/psunerseelder-logo.png" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
      </div>

      <?php include "core/main-menu.php"; ?>

      <div class="">
        <div id="owl-demo" class="owl-carousel owl-theme">

          <div class="item"><img src="media/slider/1477898282.jpg" alt="The Last of us"></div>
          <div class="item"><img src="media/slider/1477898224.jpg" alt="GTA V"></div>
          <div class="item"><img src="media/slider/1477898240.jpg" alt="Mirror Edge"></div>
        </div>
      </div>
    </header>

    <div class="main">
      <section id="intro" style="padding-bottom: 30px;">
        <div class="container">
          <div class="col-sm-12 col-md-12" style="padding: 0px 0px;">
            <h3 style="color: rgb(255, 107, 0);"><?php
            if($default_lang=='th')
              echo "ยินดีต้อนรับสู่สถาบันวิจัยระบบการดูแลผู้สูงอายุไทย";
            else
              echo "Welcome to Research Center of Caring System of Thai Elderly";
            ?></h3>
            <hr class="style11">
            <p class="thfont font-300">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การเปลี่ยนแปลงในวัยสูงอายุเกิดได้ทั้งด้านร่างกาย จิตใจ และสังคม โดยการเปลี่ยนแปลงด้านร่างกายจะมีลักษณะค่อยเป็นค่อยไป และเป็นการเปลี่ยนแปลงในทางเสื่อมสภาพการทำงานของระบบต่างๆของร่างกาย ทำให้เกิดโรคภัยไข้เจ็บตามมา เช่น โรคหัวใจหลอดเลือด โรคเบาหวาน โรคความดันโลหิตสูง เป็นต้น
  เมื่อร่างกายเกิดการเปลี่ยนแปลงในทางที่เสื่อมลงย่อมมีผลกระทบให้เกิดการเปลี่ยนแปลงทางด้านจิตใจตามมา เพราะการที่ผู้สูงอายุช่วยเหลือตัวเองได้ลดลง จึงมักจะคิดว่าตนเองไร้ค่าต่อครอบครัวและสังคม
  การเปลี่ยนแปลงทางด้านจิตใจที่พบบ่อย ได้แก่ ภาวะซึมเศร้า  ความวิตกกังวล และความรู้สึกสิ้นหวัง นอกจากนี้ยังก่อให้เกิดการเปลี่ยนแปลงทางสังคมตามมา โดยจะเห็นได้ว่าผู้สูงอายุมักจะมีกิจกรรมหรือส่วนร่วมทางสังคมลดลง และสังคมโดยทั่วไปมักให้การยอมรับและให้โอกาสในการเข้าร่วมกิจกรรมของผู้สูงอายุน้อยลง
            </p>
            <p class="thfont font-300">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การเพิ่มของประชากรสูงอายุอย่างรวดเร็วในปัจจุบัน ทำให้ไทยก้าวสู่สังคมสูงอายุทำให้มีความจำเป็นเร่งด่วน ที่จะต้องวางแผนการดูแลประชากรสูงอายุให้เหมาะสม การพัฒนาระบบการดูแลผู้สูงอายุในอนาคตเป็นเป้าหมายหลักในการจัดตั้งสถานวิจัยในครั้งนี้
            </p>
          </div>
        </div>
      </section>

      <section id="annoucement">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-sm-6">
                  <h3><?php
                  if($default_lang=='th')
                    echo "ข่าวประชาสัมพันธ์";
                  else
                    echo "News & Annoucements";
                  ?></h3>
                </div>
                <div class="col-sm-6 text-right" style="padding-top: 23px;">
                  <a href="#" class="readmore thfont">ดูทั้งหมด</a>
                </div>
                <div class="col-sm-12">
                  <hr class="style11">
                  <div class="last-annoucement-item" style="padding-top: 20px;">
                    <img src="media/statwordcloud.png" alt="" class="img-responsive img-ann " />
                    <div class="ann-content thfont font-300">
                      <h4>ขอเชิญทุกท่านเข้าร่วมรับฟังเรื่อง "odd ratio"</h4>
                      วันที่ 12 มี.ค. 2559 เวลา 9.00 - 11.00 น. ขอเชิญทุกท่านเข้าร่วมรับฟังเรื่อง "odd ratio" โดยอาจารย์ชนนท์ กองกมล
                    </div>
                  </div>
                  <hr class="style4">


                  <div class="other-annoucement-item">
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="col-sm-4">
                        <img src="media/meeting.png" alt="" class="img-responsive" />
                      </div>
                      <div class="col-sm-8">
                        <div class="other-ann-content thfont font-300">
                          <h4>ขอเชิญเข้าร่วมประชุมโครงการอบรมวิชาการอายุรศาสตร์ </h4>
                          การพยาบาลผู้สูงอายุ: จากแนวคิดสู่การปฎิบัติ ในวันที่ 29-30 กันยายน 2557 ณ ห้องอดิเรก คณ
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4">
                        <img src="media/meeting.png" alt="" class="img-responsive" />
                      </div>
                      <div class="col-sm-8">
                        <div class="other-ann-content thfont font-300">
                          <h4>ขอเชิญเข้าร่วมประชุมโครงการอบรมวิชาการอายุรศาสตร์ </h4>
                          การพยาบาลผู้สูงอายุ: จากแนวคิดสู่การปฎิบัติ ในวันที่ 29-30 กันยายน 2557 ณ ห้องอดิเรก คณ
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-sm-6">
                  <h3><?php
                  if($default_lang=='th')
                    echo "สาระน่ารู้";
                  else
                    echo "Miscellaneous";
                  ?></h3>
                </div>
                <div class="col-sm-6 text-right" style="padding-top: 23px;">
                  <a href="#" class="readmore thfont">ดูทั้งหมด</a>
                </div>
                <div class="col-sm-12">

                  <hr class="style11">

                  <div class="other-knowledge-item">
                    <div class="row">
                      <div class="col-sm-4">
                        <img src="media/cover1.png" alt="" class="img-responsive" />
                      </div>
                      <div class="col-sm-8">
                        <div class="other-ann-knowledge thfont font-300">
                          <h4>คู่มือป้องกันภาวะหกล้ม  </h4>
                          คู่มือป้องกันภาวะหกล้ม ของผู้สูงอายุในครัวเรือนชนบท
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="other-knowledge-item">
                    <div class="row">
                      <div class="col-sm-4">
                        <img src="media/cover2.png" alt="" class="img-responsive" />
                      </div>
                      <div class="col-sm-8">
                        <div class="other-ann-knowledge thfont font-300">
                          <h4>คู่มือ การนำเข้าฐานข้อมูลสุขภาวะผู้สูงอายุ  </h4>
                          การนำเข้าฐานข้อมูลสุขภาวะผู้สูงอายุอย่างง่ายใน  Google Maps
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="other-knowledge-item">
                    <div class="row">
                      <div class="col-sm-4">
                        <img src="media/meeting.png" alt="" class="img-responsive" />
                      </div>
                      <div class="col-sm-8">
                        <div class="other-ann-knowledge thfont font-300">
                          <h4>เอกสาร บรรยายการดูแลผู้สูงอายุในชุมชนเขตเมือง  </h4>
                          โดยศ.นพ. ประเสริฐ อัสสันตชัย สาขาวิชาเวชศาสตร์ผู้สูงอายุ ภาควิชาเวชศาสตร์ป้องกันและสังคม คณะแพทยศาสตร์ศิริราชพยาบาล
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="other-knowledge-item">
                    <div class="row">
                      <div class="col-sm-4">
                        <img src="media/cover4.png" alt="" class="img-responsive" />
                      </div>
                      <div class="col-sm-8">
                        <div class="other-ann-knowledge thfont font-300">
                          <h4>Supportive and Palliative Care Consult Service Presentation  </h4>
                          Supportive & Palliative Care Consult Service Study Visit at University Of Missouri Hospital
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="other-knowledge-item">
                    <div class="row">
                      <div class="col-sm-4">
                        <img src="media/meeting.png" alt="" class="img-responsive" />
                      </div>
                      <div class="col-sm-8">
                        <div class="other-ann-knowledge thfont font-300">
                          <h4>สมองเสื่อม  </h4>
                          Current Status and Update of Dementia
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr class="style11">


                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <h3><?php
              if($default_lang=='th')
                echo "ประมวลภาพกิจกรรม";
              else
                echo "Photo gallery";
              ?></h3>
            </div>
            <div class="col-sm-6 text-right" style="padding-top: 23px;">
              <a href="#" class="readmore thfont">ดูทั้งหมด</a>
            </div>
            <div class="col-sm-12">
              <hr class="style11">
              <div id="owl-gallery">

                  <div class="item">
                    <img src="media/gallery/gall-cover-1.png" alt="Owl Image" class="img-responsive" style="padding: 0px 5px;">
                    <div class="slide-title thfont font-300 text-center">
                      <a href="#">การประชุมกับสำนักงานคณะกรรมการนโยบายวิทยาศาสตร์เทคโนโลยีและนวัตกรรม</a>
                    </div>
                  </div>
                  <div class="item"><img src="media/gallery/gall-cover-2.png" alt="Owl Image" class="img-responsive" style="padding: 0px 5px;">
                    <div class="slide-title thfont font-300 text-center">
                      <a href="#">ประชุมกรรมการอำนวยการสถานวิจัยระบบการดูแลผู้สูงอายุไทย วันที่ 7 พ.ค. 58</a>
                    </div>
                  </div>
                  <div class="item"><img src="media/gallery/gall-cover-3.png" alt="Owl Image" class="img-responsive" style="padding: 0px 5px;">
                    <div class="slide-title thfont font-300 text-center">
                      <a href="#">Journal club วันที่ 27 มีนาคม 2558</a>
                    </div>
                  </div>
                  <div class="item"><img src="media/gallery/gall-cover-4.png" alt="Owl Image" class="img-responsive" style="padding: 0px 5px;">
                    <div class="slide-title thfont font-300 text-center">
                      <a href="#">นการลงพื้นที่เยี่ยมชมโครงการฯ</a>
                    </div>
                  </div>
                  <div class="item"><img src="media/gallery/gall-cover-1.png" alt="Owl Image" class="img-responsive" style="padding: 0px 5px;">
                    <div class="slide-title thfont font-300 text-center">
                      <a href="#">ประชุมร่วมกับเทศบาลนครหาดใหญ่</a>
                    </div>
                  </div>
                  <div class="item"><img src="media/gallery/gall-cover-2.png" alt="Owl Image" class="img-responsive" style="padding: 0px 5px;">
                    <div class="slide-title thfont font-300 text-center">
                      <a href="#">ประชุมการทดลองแนวปฎิบัติการนำไปใช้ 27 มิ.ย 57 และ7 กค.57</a>
                    </div>
                  </div>
                  <div class="item"><img src="media/gallery/gall-cover-3.png" alt="Owl Image" class="img-responsive" style="padding: 0px 5px;">
                    <div class="slide-title thfont font-300 text-center">
                      <a href="#">ประชุมแลกเปลี่ยนเรียนรู้ วันที่ 15 พค.57</a>
                    </div>
                  </div>
                  <div class="item"><img src="media/gallery/gall-cover-4.png" alt="Owl Image" class="img-responsive" style="padding: 0px 5px;">
                    <div class="slide-title thfont font-300 text-center">
                      <a href="#">Study visit "Dementia Day Care Center at Sun Love Home, Singapore"</a>
                    </div>
                  </div>

                </div>
            </div>
          </div>
        </div>
      </section>
    </div>


    <?php include "core/footer.php"; ?>

    <script src="ext-lib/owl-carousel/assets/js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

    <!-- Include js plugin -->
    <script src="ext-lib/owl-carousel/owl-carousel/owl.carousel.js"></script>

    <!-- JS Code -->
    <script type="text/javascript">
      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            navigation : false, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem: true,
            autoPlay: true,
            autoHeight : true,
            stopOnHover: true,
            responsive: true

            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false

        });

        $("#owl-gallery").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]

        });
      });
    </script>
  </body>
</html>
