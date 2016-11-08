<!DOCTYPE html>
<html>
<?php $dbhost = 'localhost';
                                    $dbuser = 'root';
                                    $dbpass = '';
                                    $dbname = 'homevisit';
mysql_connect($dbhost,$dbuser,$dbpass) or die("ติดต่อฐานข้อมูลไม่ได้");
mysql_select_db($dbname) or die("เลือกฐานข้อมูลไม่ได้");
$hn = $_GET["hn"];
$sql20="SELECT * from patientinfo where patient_hn like '$hn' ";

mysql_query("SET NAMES UTF8");
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
$result = mysql_db_query($dbname,$sql20) or die (mysql_error());
$row = mysql_fetch_array($result); 
    
$type = $row["patient_visit_type"];
switch ($type) {
case 1:
    $type = "Home visit care"; break;
case 2:
    $type = "Geriatric case"; break;
case 3:
    $type = "Palliative case"; break;
}    
    ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <title>ระบบบริหารจัดการข้อมูลหน่วยบริการเยี่ยมบ้าน (Home visit service management system)</title>

    <!--mdl-->
    <link rel="stylesheet" href="lib/mdl-customize/material.min.css">
    <link rel="stylesheet" href="lib/mdl-template-dashboard/styles.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Prompt&subset=thai" rel="stylesheet">

    <!--icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="lib/font-awesome-4.6.3/css/font-awesome.min.css">

    <!--custom css-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/breadcrumb.css">

</head>

<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="demo-header mdl-layout__header mdl-color--primary mdl-color-text--white">
            <div class="mdl-layout__header-row">
                <img src="img/logo-rama.png" width="50px" style="margin-right: 20px;">
                <div class="mdl-layout-title">
                    <h6 class="mdl-typography--title">
                        ระบบบริหารจัดการข้อมูลหน่วยบริการเยี่ยมบ้าน
                        <p>ภาควิชาเวชศาสตร์ครอบครัว คณะแพทยศาสตร์โรงพยาบาลรามาธิบดี มหาวิทยาลัยมหิดล</p>
                    </h6>
                </div>
                <div class="mdl-layout-spacer"></div>
            </div>
        </header>
        <div class="demo-drawer mdl-layout__drawer mdl-color--white mdl-color-text--black">
            <header class="demo-drawer-header mdl-color--green">
                <img src="img/user.jpg" class="demo-avatar">
                <div class="demo-avatar-dropdown">
                    <span class="mdl-typography--body-2 mdl-color-text--white">นพ.ประสงค์ ทรงธรรม</span>
                    <div class="mdl-layout-spacer"></div>
                    <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons mdl-color-text--white" role="presentation">arrow_drop_down</i>
                        <span class="visuallyhidden">Accounts</span>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                        <li class="mdl-menu__item">ดูข้อมูลส่วนตัว</li>
                        <li class="mdl-menu__item">แก้ไขรหัสผ่าน</li>
                        <li class="mdl-menu__item"><i class="material-icons">exit_to_app</i> ออกจากระบบ</li>
                    </ul>
                </div>
            </header>

            <nav class="demo-navigation mdl-navigation mdl-color--grey-200">
                <a class="mdl-navigation__link mdl-color-text--grey-900" href="index.html"><i class="mdl-color-text--grey-900 material-icons" role="presentation">home</i>หน้าหลัก</a>
                <a class="mdl-navigation__link mdl-color--grey-300 mdl-color-text--green" href="patient.html"><i class="material-icons mdl-color-text--green" role="presentation">folder_shared</i>ผู้ป่วยเยี่ยมบ้าน</a>
                <a class="mdl-navigation__link mdl-color-text--grey-900" href="calendar.html"><i class="mdl-color-text--grey-900 material-icons" role="presentation">date_range</i>นัดหมาย</a>
                <a class="mdl-navigation__link mdl-color-text--grey-900" href="summary.html"><i class="mdl-color-text--grey-900 material-icons" role="presentation">assignment</i>สรุปเยี่ยมบ้าน</a>
                <div class="mdl-layout-spacer"></div>
                <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
            </nav>
        </div>
        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-grid demo-content">

                <ul class="breadcrumb">
                    <li><a href="patient.html">ผู้ป่วยเยี่ยมบ้าน</a></li>
                    <li>ข้อมูลผู้ป่วย HN <?php echo $row["patient_hn"];?></li>
                </ul>

                <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
                    <div class="mdl-card__menu">
                        <button id="menu-function" class="mdl-button mdl-js-button mdl-button--icon">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-function">
                            <li class="mdl-menu__item"><a href="patient_edit_5987452.php"><i class="material-icons">edit</i> แก้ไข</a></li>
                            <li class="mdl-menu__item"><a href="patient_print_5987452.html" target="_blank"><i class="material-icons">print</i> พิมพ์</a></li>
                            <li class="mdl-menu__item"><a id="dialog-delete"><i class="material-icons">delete</i> ลบ</a></li>
                        </ul>

                        <dialog class="mdl-dialog">
                            <h4 class="mdl-dialog__title">ต้องการลบหรือไม่?</h4>
                            <div class="mdl-dialog__content">
                                <p>
                                    นาง มาลิณี เกียรติขจร
                                    <br>HN 5987452
                                </p>
                            </div>
                            <div class="mdl-dialog__actions">
                                <a href="patient.html">
                                    <button type="button" class="mdl-button">ลบ</button>
                                </a>
                                <button type="button" class="mdl-button close">ยกเลิก</button>
                            </div>
                        </dialog>
                    </div>
                    <div class="mdl-card__supporting-text mdl-color-text--grey-900 mdl-cell--12-col">
                        <div class="mdl-grid mdl-typography--subhead">
                            <div><img class="logo-report" src="img/logo-report.jpg">
                                <p class="mdl-typography--body-2">FAM-MED</p>
                            </div>

                            <div>
                                แบบบันทึกสุขภาพผู้ป่วยและครอบครัว
                                <br> ภาควิชาเวชศาสตร์ครอบครัว คณะแพทยศาสตร์โรงพยาบาลรามาธิบดี
                                <p class="mdl-typography--title">Department of Family Medicine</p>
                            </div>
                        </div>

                        <dl class="dl-horizontal mdl-typography--subhead">
                            <dt>รหัสโรงพยาบาล</dt>
                            <dd>HN <?php echo $row["patient_hn"];?></dd>

                            <dt>สถานะการเยี่ยมบ้าน</dt>
                            <dd>เยี่ยมต่อ</dd>

                            <dt>ประเภทการเยี่ยมบ้าน</dt>
                            <dd><?php echo $type;?>
                            </dd>


                            <dt>แพทย์เจ้าของไข้</dt>
                            <dd><?php echo $row["patient_doctor_owner"];?><//dd>

                            <hr>

                            <h1 class="mdl-typography--title mdl-color-text--green">ส่วนที่ 1 ข้อมูลทั่วไป</h1>

                            <dt>เลขที่บัตรประชาชน</dt>
                            <dd><?php echo $row["patient_id"];?></dd>

                            <dt>ชื่อ-นามสกุล</dt>
                            <dd><?php echo $row["patient_p_name"]." ".$row["patient_name"]." ".$row["patient_surname"];?></dd>

                            <dt>ที่อยู่ปัจจุบัน</dt>
                        
                            <dd>
                                <?php echo "เลขที่ ".$row["patient_add_no"]." หมู่ที่ ".$row["patient_add_mhoo"]." อาคาร/หมู่บ้าน ".$row["patient_add_village"]." ซอย ".$row["patient_add_soi"]." ถนน ".$row["patient_add_road"]." แขวง/ตำบล ".$row["patient_add_subdis"]." เขต/อำเภอ ".$row["patient_add_dis"]." จังหวัด ".$row["patient_add_province"]." รหัสไปรษณีย์ ".$row["patient_add_zip"];?>
<!--                                เลขที่ 270 หมู่ที่ 1 อาคาร/หมู่บ้าน สุขนคร ซอย สามัคคี ถนน พระรามหก แขวง/ตำบล ทุ่งพญาไท เขต/อำเภอ ราชเวที จังหวัด กรุงเทพมหานคร 10400-->
                        </dd>

                            <dt>เพศ</dt>
                            <dd><?php 
                                $mars = "fa fa-mars";
                                $venus = "fa fa-venus";
                                if ($row["patient_gender"] == "male"){
                                    echo "<i class={$mars}></i> ชาย</dd>;";
                                }
                                else
                                    echo "<i class={$venus}></i> หญิง</dd>;";
                                ?>
                                

                            <dt>วัน เดือน ปีเกิด</dt>
                            <dd><?php echo $row["patient_dateofbirth"]." ".$row["patient_monthofbirth"]." ".$row["patient_yearofbirth"];?></dd>

                            <dt>อายุ</dt>
                            <dd>60 ปี 10 เดือน</dd>

                            <dt>โทรศัพท์มือถือ</dt>
                            <dd><i class="fa fa-phone"></i> 096 452 1596</dd>

                            <dt>โทรศัพท์ที่ทำงาน</dt>
                            <dd>-</dd>

                            <dt>โทรศัพท์ที่บ้าน</dt>
                            <dd><i class="fa fa-phone"></i> 02 644 9042</dd>

                            <dt>สถานภาพ</dt>
                            <dd>สมรส</dd>

                            <dt>ศาสนา</dt>
                            <dd>พุทธ</dd>

                            <dt>ระดับการศึกษา</dt>
                            <dd>มัธยมศึกษาตอนต้น</dd>

                            <dt>อาชีพ</dt>
                            <dd>แม่บ้าน/ว่างงาน</dd>

                            <dt>สิทธิการรักษา</dt>
                            <dd>เบิกได้</dd>

                            <hr>

                            <dt>ข้อมูลญาติที่ติดต่อได้</dt>
                            <dd>
                                <b>ญาติคนที่ 1:</b>
                                <br>ชื่อ-นามสกุล: นาง กนกวรรณ เกียรติขจร
                                <br>เกี่ยวข้องเป็น ลูกสาว
                                <br>เบอร์ติดต่อ: <i class="fa fa-phone"></i> 095 965 4523
                                <hr>
                                <b>ญาติคนที่ 2:</b>
                                <br>ชื่อ-นามสกุล: นาง ปราณี เกียรติขจร
                                <br>เกี่ยวข้องเป็น น้องสาว
                                <br>เบอร์ติดต่อ: <i class="fa fa-phone"></i> 094 456 1234
                            </dd>

                            <hr>

                            <dt>แผนผังครอบครัว</dt>
                            <dd><img src="img/familytree.jpg" style="border: 1px solid #ccc;" width="100%"></dd>

                            <hr>

                            <dt>แผนที่บ้าน</dt>
                            <dd>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.202290236063!2d100.52447731529752!3d13.76667120065673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2994da99aa1fd%3A0xc4dd9b398f456bcf!2z4LmC4Lij4LiH4Lie4Lii4Liy4Lia4Liy4Lil4Lij4Liy4Lih4Liy4LiY4Li04Lia4LiU4Li1!5e0!3m2!1sth!2sth!4v1455191320193" width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </dd>

                            <hr>

                            <h1 class="mdl-typography--title mdl-color-text--green">ส่วนที่ 2 ข้อมูลสุขภาพ</h1>
                            <h3 class="mdl-typography--title">ประวัติการรักษา</h3>

                            <dt>การผ่าตัด</dt>
                            <dd>เคยผ่าตัด ไส้ติ่ง</dd>

                            <dt>การแพ้ยา/แพ้อาหาร</dt>
                            <dd>ไม่มี</dd>

                            <dt>แพทย์ทางเลือก</dt>
                            <dd>ไม่มี</dd>

                            <h3 class="mdl-typography--title">พฤติกรรมเสี่ยงในปัจจุบัน</h3>
                            <dt>สุรา</dt>
                            <dd>
                                เลิกดื่มแล้ว และ ไม่มีปัญหาเกี่ยวกับการดื่ม
                            </dd>

                            <dt>บุหรี่</dt>
                            <dd>ไม่เคยสูบ</dd>

                            <h3 class="mdl-typography--title">ประวัติครอบครัว</h3>

                            <dt>สถานะทางการเงิน</dt>
                            <dd>ไม่มีปัญหา</dd>

                            <dt>ประวัติโรคในครอบครัว</dt>
                            <dd>
                                <ul class="mdl-typography--subhead">
                                    <li>Hypertension</li>
                                    <li>Stroke</li>
                                </ul>
                            </dd>

                            <hr>

                            <h1 class="mdl-typography--title mdl-color-text--green">ส่วนที่ 3 สรุปข้อมูลปัญหาผู้ป่วย</h1>

                            <dt>รหัสการวินิจฉัยปัญหา</dt>
                            <dd>
                                <ul class="mdl-typography--subhead">
                                    <li>B07 Viral warts</li>
                                    <li>E117 Non-insulin-dependent diabetes mellitus ,with multiple complications
                                    </li>
                                </ul>
                            </dd>

                            <hr>

                            <dt> ผู้บันทึกข้อมูล </dt>
                            <dd>
                                นพ.ประสงค์ ทรงธรรม (013651) เมื่อวันที่ 24/09/2559
                            </dd>
                        </dl>
                    </div>
                </div>
                <!--/.mdl-card-->
            </div>
        </main>
    </div>
    <script src="lib/mdl/material.min.js"></script>
    <script src="js/dialog.js"></script>
</body>

</html>