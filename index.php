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
                        <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--112-col-desktop">
                            <div class="mdl-card__menu">
                                <a href="patient_add.html">
                                    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-color-text--green"> <i class="material-icons">add</i> </button>
                                </a>
                            </div>
                            <div class="mdl-card__supporting-text mdl-color-text--grey-600 mdl-cell mdl-cell--12-col">
                                <h5><i class="mdl-color-text--grey-600 material-icons">folder_shared</i> ผู้ป่วยในความดูแล</h5>
                                <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                                    <div class="mdl-tabs__tab-bar"> <a href="#visiting-panel" class="mdl-tabs__tab is-active">เยี่ยมต่อ</a> <a href="#closed-panel" class="mdl-tabs__tab">ปิดเคส</a> </div>
                                    <!--/.mdl-tabs__tab-bar-->
                                    <div class="mdl-tabs__panel is-active " id="visiting-panel">
                                        <h6>ผู้ป่วยปัจจุบันใน 3 เดือนที่ผ่านมา</h6>
                                        <table class="mdl-data-table mdl-js-data-table mdl-cell mdl-cell--12-col">
                                            <thead>
                                                <tr>
                                                    <th class="mdl-data-table__header--sorted-ascending">HN</th>
                                                    <th class="mdl-data-table__cell--non-numeric">ชื่อ-นามสกุล</th>
                                                    <th>อายุ (ปี)</th>
                                                    <th>สถานะ</th>
                                                    <th>เยี่ยมแล้ว (ครั้ง)</th>
                                                    <th>เยี่ยมครั้งสุดท้าย</th>
                                                    <th>เยี่ยมครั้งต่อไป</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>4987521</td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a href="#">นาง เพียรจิต จงใจรักษ์</a></td>
                                                    <td>79</td>
                                                    <td>เยี่ยมต่อ</td>
                                                    <td>5</td>
                                                    <td>25/5/2559</td>
                                                    <td>25/8/2560</td>
                                                </tr>
                                                <tr>
                                                    <td>5874158</td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a href="#">นาย เหมันต์ ธนไพบูรณ์</a></td>
                                                    <td>65</td>
                                                    <td>เยี่ยมต่อ</td>
                                                    <td>6</td>
                                                    <td>25/5/2559</td>
                                                    <td>25/8/2560</td>
                                                </tr>
                                                <tr>
                                                    <td>5965485</td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a href="#">นาง รุ่งทิพย์ ก่อเกียรติ</a></td>
                                                    <td>75</td>
                                                    <td>เยี่ยมต่อ</td>
                                                    <td>3</td>
                                                    <td>20/5/2559</td>
                                                    <td>20/7/2560</td>
                                                </tr>
                                                <tr>
                                                    <td>6158489</td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a href="#">นาง ชญานิศ พลฑา</a></td>
                                                    <td>73</td>
                                                    <td>เยี่ยมต่อ</td>
                                                    <td>7</td>
                                                    <td>12/5/2559</td>
                                                    <td>12/7/2560</td>
                                                </tr>
                                                <tr>
                                                    <td>6258459</td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a href="#">นาย ชัชพิสิทธิ์ กาวิโล</a></td>
                                                    <td>89</td>
                                                    <td>เยี่ยมต่อ</td>
                                                    <td>8</td>
                                                    <td>12/6/2559</td>
                                                    <td>15/7/2559</td>
                                                </tr>
                                                <tr>
                                                    <td>7854485</td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a href="#">นาง วิยดา เครื่องดี</a></td>
                                                    <td>66</td>
                                                    <td>เยี่ยมต่อ</td>
                                                    <td>6</td>
                                                    <td>5/6/2559</td>
                                                    <td>5/8/2560</td>
                                                </tr>
                                                <tr>
                                                    <td>8512365</td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a href="#">นาย ธนโชติ  มหาทรัพย์</a></td>
                                                    <td>88</td>
                                                    <td>เยี่ยมต่อ</td>
                                                    <td>9</td>
                                                    <td>11/5/2559</td>
                                                    <td>11/8/2560</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--/#visiting-panel-->
                                    <div class="mdl-tabs__panel" id="closed-panel">
                                        <h6>ผู้ป่วยที่ปิดเคสใน 3 เดือนที่ผ่านมา</h6>
                                        <table class="mdl-data-table mdl-js-data-table mdl-cell--12-col">
                                            <thead>
                                                <tr>
                                                    <th class="mdl-data-table__header--sorted-ascending">HN</th>
                                                    <th class="mdl-data-table__cell--non-numeric">ชื่อ-นามสกุล</th>
                                                    <th>อายุ (ปี)</th>
                                                    <th>สถานะ</th>
                                                    <th>เยี่ยมแล้ว (ครั้ง)</th>
                                                    <th>เยี่ยมครั้งสุดท้าย</th>
                                                    <th>เยี่ยมครั้งต่อไป</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>5987452</td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a href="#">นาง มาลิณี เกียรติขจร</a></td>
                                                    <td>25</td>
                                                    <td>ปิดเคส</td>
                                                    <td>25</td>
                                                    <td>25/5/2559</td>
                                                    <td>25/5/2560</td>
                                                </tr>
                                                <tr>
                                                    <td>6215845</td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a href="#">นาย รุ่งโรจน์ เรืองรอง</a></td>
                                                    <td>25</td>
                                                    <td>ปิดเคส</td>
                                                    <td>25</td>
                                                    <td>25/5/2559</td>
                                                    <td>25/5/2560</td>
                                                </tr>
                                                <tr>
                                                    <td>8963215</td>
                                                    <td class="mdl-data-table__cell--non-numeric"><a href="#">นาย วิบูรณ์ ธนโชติไพศาล</a></td>
                                                    <td>25</td>
                                                    <td>ปิดเคส</td>
                                                    <td>25</td>
                                                    <td>25/5/2559</td>
                                                    <td>25/5/2560</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--/#closed-panel-->
                                </div>
                                <!--/.tabs-->
                            </div>
                            <div class="mdl-card__actions mdl-card--border"> <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--green">ดูผู้ป่วยทั้งหมด</a> </div>
                        </div>
                        <!--/.mdl-card-->
                        <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
                            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
                                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                                    <h5><i class="material-icons">date_range</i> นัดหมาย</h5>
                                    <p>Non dolore elit adipisicing ea reprehenderit consectetur culpa.</p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border"> <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--green">View More</a> </div>
                                <div class="mdl-card__menu">
                                    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-color-text--green"> <i class="material-icons">add</i> </button>
                                </div>
                            </div>
                            <!--/.mdl-card-->
                            <div class="demo-separator mdl-cell--1-col"></div>
                            <div class="demo-options mdl-card mdl-color--green mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
                                <div class="mdl-card__supporting-text mdl-color-text--white">
                                    <h3>View options</h3>
                                    <ul>
                                        <li>
                                            <label for="chkbox1" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                                                <input type="checkbox" id="chkbox1" class="mdl-checkbox__input"> <span class="mdl-checkbox__label">Click per object</span> </label>
                                        </li>
                                        <li>
                                            <label for="chkbox2" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                                                <input type="checkbox" id="chkbox2" class="mdl-checkbox__input"> <span class="mdl-checkbox__label">Views per object</span> </label>
                                        </li>
                                        <li>
                                            <label for="chkbox3" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                                                <input type="checkbox" id="chkbox3" class="mdl-checkbox__input"> <span class="mdl-checkbox__label">Objects selected</span> </label>
                                        </li>
                                        <li>
                                            <label for="chkbox4" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                                                <input type="checkbox" id="chkbox4" class="mdl-checkbox__input"> <span class="mdl-checkbox__label">Objects viewed</span> </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mdl-card__actions mdl-card--border"> <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50">Change location</a>
                                    <div class="mdl-layout-spacer"></div> <i class="material-icons">location_on</i> </div>
                            </div>
                            <!--/.demo-options-->
                        </div>
                        <!--/.calendar-->
                        <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
                            <h5><i class="material-icons">assignment</i> สรุปเยี่ยมบ้าน</h5>
                            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-cell--12-col">
                                <thead>
                                    <tr>
                                        <th>HN</th>
                                        <th class="mdl-data-table__cell--non-numeric">ชื่อ-นามสกุล</th>
                                        <th class="mdl-data-table__header--sorted-descending">วันที่เยี่ยม</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>7469584</td>
                                        <td class="mdl-data-table__cell--non-numeric"><a href="#">นาง มะลิ บำรุงมิตร</a></td>
                                        <td>15/8/2559</td>
                                    </tr>
                                    <tr>
                                        <td>7567245</td>
                                        <td class="mdl-data-table__cell--non-numeric"><a href="#">นาย ขจร ชัยโชค</a></td>
                                        <td>14/8/2559</td>
                                    </tr>
                                    <tr>
                                        <td>6981258</td>
                                        <td class="mdl-data-table__cell--non-numeric"><a href="#">นาง กันยา สุปราณี</a></td>
                                        <td>10/8/2559</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/.summary-->
                    </div>
                </main>
        </div>
        <script src="lib/mdl/material.min.js"></script>
    </body>

</html>