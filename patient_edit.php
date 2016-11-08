<!DOCTYPE html>
<html>
<?php 
    include 'head.html';
?>

    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <?php include 'components/tab.html'; ?>
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
                                        <?php include 'components/patient_breadcrumb.html'; ?>
                                            <form action="" method="post">
                                                <div class="tab-content">
                                                    <?php include 'components/patient_edit_tab_0.html'; 
                                                          include 'components/patient_edit_tab_1.html' ;
                                                          include 'components/patient_edit_tab_2.html' ;
                                                          include 'components/patient_edit_tab_3.html' ;
                                    
                                                    ?>
                                                </div>
                                            </form>
                                    </div>
                                    <!--/.board-->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
        </div>
        <script src="js/jquery-2.2.2.min.js"></script>
        <script src="lib/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src="lib/mdl/material.min.js"></script>
    </body>

</html>