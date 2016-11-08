<!DOCTYPE html>
<html>
<?php 
    include 'management/head_management.html';
?>

    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <?php include 'components/tab.html'; ?>
                <main class="mdl-layout__content mdl-color--grey-100">
                    <div class="mdl-grid demo-content">
                        <ul class="breadcrumb">
                            <li>ผู้ป่วยเยี่ยมบ้าน</li>
                        </ul>
                        <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--112-col-desktop">
                            <div class="mdl-card__menu"></div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600 mdl-cell--12-col">
                                <h1 class="mdl-typography--title">ค้นหาผู้ป่วยเยี่ยมบ้านในความดูแล</h1>
                                <div class="mdl-grid">
                                    <div class="mdl-layout-spacer"></div>
                                    <form action="patient_search.html">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input" type="text" id="sample1">
                                            <label class="mdl-textfield__label" for="sample1">ค้นหา HN หรือ ชื่อ - นามสกุล</label>
                                        </div>
                                        <button class="mdl-button mdl-js-button mdl-button--icon"> <i class="material-icons">search</i> </button>
                                    </form>
                                    <div class="mdl-layout-spacer"></div>
                                </div>
                            </div>
                        </div>
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell--12-col mdl-cell mdl-cell--12-col-tablet mdl-cell--112-col-desktop">
                            <div class="mdl-card__menu">
                                <button id="menu-filter" class="mdl-button mdl-js-button mdl-button--icon"> <i class="material-icons">filter_list</i> </button>
                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-filter">
                                    <li class="mdl-menu__item"><span class="mdl-color-text--accent">ทั้งหมด</span></li>
                                    <li class="mdl-menu__item">ผู้ป่วยใหม่</li>
                                    <li class="mdl-menu__item">เยี่ยมต่อ</li>
                                    <li class="mdl-menu__item">ปิดเยี่ยมบ้าน</li>
                                </ul>
                                <button id="menu-function" class="mdl-button mdl-js-button mdl-button--icon"> <i class="material-icons">more_vert</i> </button>
                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-function">
                                    <li class="mdl-menu__item"><a href="patient_add.html"><i class="material-icons">person_add</i> เพิ่ม</a></li>
                                    <li class="mdl-menu__item"><i class="material-icons">print</i> พิมพ์</li>
                                    <li class="mdl-menu__item"><i class="material-icons">delete</i> ลบ</li>
                                </ul>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600 mdl-cell mdl-cell--12-col">
                                <h1 class="mdl-typography--title">ผู้ป่วยเยี่ยมบ้านในความดูแล (ทั้งหมด)</h1>
                                <!--table-->
                                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-cell--12-col">
                                    <thead>
                                        <tr>
                                            <th class="mdl-data-table__header--sorted-ascending">HN</th>
                                            <th class="mdl-data-table__cell--non-numeric">ชื่อ-นามสกุล</th>
                                            <th>สถานะ</th>
                                            <th>เยี่ยมแล้ว (ครั้ง)</th>
                                            <th>เยี่ยมครั้งสุดท้าย</th>
                                            <th>เยี่ยมครั้งต่อไป</th>
                                            <th>แก้ไข</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--new-->
                                        <tr>
                                            <td>5987452</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="patient_5987452.html">นาง มาลิณี เกียรติขจร</a></td>
                                            <td>ใหม่ <small class="mdl-color-text--">(50%)</small></td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>25/5/2559</td>
                                            <td><a href="patient_edit_5987452.html"><i class="material-icons">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>6215845</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="#">นาย รุ่งโรจน์ เรืองรอง</a></td>
                                            <td>ใหม่</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>25/5/2559</td>
                                            <td><i class="material-icons">edit</i></td>
                                        </tr>
                                        <tr>
                                            <td>8963215</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="#">นาย วิบูรณ์ ธนโชติไพศาล</a></td>
                                            <td>ใหม่</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>25/5/2559</td>
                                            <td><i class="material-icons">edit</i></td>
                                        </tr>
                                        <!--visit-->
                                        <tr>
                                            <td>4987521</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="#">นาง เพียรจิต จงใจรักษ์</a></td>
                                            <td>เยี่ยมต่อ</td>
                                            <td>5</td>
                                            <td>25/5/2559</td>
                                            <td>25/8/2560</td>
                                            <td><i class="material-icons">edit</i></td>
                                        </tr>
                                        <tr>
                                            <td>5874158</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="#">นาย เหมันต์ ธนไพบูรณ์</a></td>
                                            <td>เยี่ยมต่อ</td>
                                            <td>6</td>
                                            <td>25/5/2559</td>
                                            <td>25/8/2560</td>
                                            <td><i class="material-icons">edit</i></td>
                                        </tr>
                                        <tr>
                                            <td>5965485</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="#">นาง รุ่งทิพย์ ก่อเกียรติ</a></td>
                                            <td>เยี่ยมต่อ</td>
                                            <td>3</td>
                                            <td>20/5/2559</td>
                                            <td>20/7/2560</td>
                                            <td><i class="material-icons">edit</i></td>
                                        </tr>
                                        <tr>
                                            <td>6158489</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="#">นาง ชญานิศ พลฑา</a></td>
                                            <td>เยี่ยมต่อ</td>
                                            <td>7</td>
                                            <td>12/5/2559</td>
                                            <td>12/7/2560</td>
                                            <td><i class="material-icons">edit</i></td>
                                        </tr>
                                        <tr>
                                            <td>6258459</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="#">นาย ชัชพิสิทธิ์ กาวิโล</a></td>
                                            <td>เยี่ยมต่อ</td>
                                            <td>8</td>
                                            <td>12/6/2559</td>
                                            <td>15/7/2559</td>
                                            <td><i class="material-icons">edit</i></td>
                                        </tr>
                                        <tr>
                                            <td>7854485</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="#">นาง วิยดา เครื่องดี</a></td>
                                            <td>เยี่ยมต่อ</td>
                                            <td>6</td>
                                            <td>5/6/2559</td>
                                            <td>5/8/2560</td>
                                            <td><i class="material-icons">edit</i></td>
                                        </tr>
                                        <tr>
                                            <td>8512365</td>
                                            <td class="mdl-data-table__cell--non-numeric"><a href="#">นาย ธนโชติ  มหาทรัพย์</a></td>
                                            <td>เยี่ยมต่อ</td>
                                            <td>9</td>
                                            <td>11/5/2559</td>
                                            <td>11/8/2560</td>
                                            <td><i class="material-icons">edit</i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <div class="mdl-grid"> <span class="margin-right-10">แสดง</span>
                                    <select>
                                        <option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>40</option>
                                        <option>50</option>
                                    </select> <span class="margin-left-10">รายชื่อต่อหน้า</span>
                                    <div class="mdl-layout-spacer"></div>
                                    <button disabled class="mdl-button mdl-js-button mdl-button--icon"> <i class="material-icons">navigate_before</i> </button> <span class="margin-left-10 margin-right-10">1-10 จาก 12 รายชื่อ</span>
                                    <a href="patient_2.html">
                                        <button class="mdl-button mdl-js-button mdl-button--icon"> <i class="material-icons">navigate_next</i> </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--/.mdl-card-->
                    </div>
                </main>
        </div>
        <script src="lib/mdl/material.min.js"></script>
    </body>

</html>