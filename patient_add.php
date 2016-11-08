<!DOCTYPE html>
<html>
<?php 
    include 'head.html';
?>

    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <?php include 'tab.html'; ?>
                <main class="mdl-layout__content mdl-color--grey-100">
                    <div class="mdl-grid demo-content">
                        <div class="mdl-cell mdl-cell--12-col">
                            <ul class="breadcrumb">
                                <li><a href="patient_search.php">ผู้ป่วยเยี่ยมบ้าน</a></li>
                                <li>เพิ่มผู้ป่วยเยี่ยมบ้านใหม่</li>
                            </ul>
                            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--112-col-desktop">
                                <div class="mdl-card__supporting-text mdl-color-text--black mdl-cell mdl-cell--12-col">
                                    <div class="board mdl-typography--subhead">
                                        <?php include 'patient_breadcrumb.html'; ?>
                                            <form action="patient_add_db_hn.php" method="POST">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="check-hn-panel">
                                                        <h6 class="mdl-typography--title mdl-color-text--green">ตรวจสอบเลขที่โรงพยาบาล</h6>
                                                        <div class="mdl-grid">
                                                            <div class="mdl-cell--4-col">
                                                                <div class="mdl-textfield">เลขที่โรงพยาบาล</div>
                                                            </div>
                                                            <div class="mdl-cell--8-col">
                                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                                    <input class="mdl-textfield__input" type="text" pattern="[0-9]{7}?" id="hn" name="hn">
                                                                    <label class="mdl-textfield__label" for="hn">เลขที่โรงพยาบาล</label> <span class="mdl-textfield__error">กรอกให้ครบ7หลัก/กรอกเฉพาะตัวเลข</span> </div>
                                                            </div>
                                                        </div>
                                                        <div class="mdl-grid">
                                                            <div class="mdl-cell--4-col"> สถานะเยี่ยมบ้าน </div>
                                                            <div class="mdl-cell--8-col"> ใหม่ </div>
                                                        </div>
                                                        <div class="mdl-grid">
                                                            <div class="mdl-cell--4-col"> ประเภทการเยี่ยมบ้าน </div>
                                                            <div class="mdl-cell--8-col">
                                                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="homevisit">
                                                                    <input type="radio" id="homevisit" class="mdl-radio__button" name="type" value="1" checked> <span class="mdl-radio__label">Home visit care</span> </label>
                                                                <br>
                                                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="geriatric">
                                                                    <input type="radio" id="geriatric" class="mdl-radio__button" name="type" value="2"> <span class="mdl-radio__label">Geriatric case </span> </label>
                                                                <br>
                                                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="palliative">
                                                                    <input type="radio" id="palliative" class="mdl-radio__button" name="type" value="3"> <span class="mdl-radio__label">Palliative case </span> </label>
                                                            </div>
                                                            <div> </div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <div class="mdl-grid">
                                                            <div class="mdl-layout-spacer"></div>
                                                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" title="เริ่มกรอกข้อมูลส่วนที่ 1"> เริ่มกรอกข้อมูล </button>
                                                        </div>
                                            </form>
                                            </div>
                                            </div>
                                            <!--/.board-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
        </div>
        <!-- script -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="js/jquery-2.2.2.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="lib/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src="lib/mdl/material.min.js"></script>
    </body>

</html>