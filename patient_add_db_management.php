<?php        
    $hn = $_POST['hn'];
    $type = $_POST['type'];
    $id = $_POST['id-number'];
    $p_name = $_POST['p_name'] ;
    $fname = $_POST['fname'] ;
    $lname = $_POST['lname'] ;
    $bday = $_POST['bday'] ;
    $bmonth = $_POST['bmonth'] ;
    $byear = $_POST['byear'] ;
    $status = $_POST['status'];
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
        if ($gender ==1) $gender = "male";
        else $gender = "female";
    }
    $religion = $_POST['religion'];
    if ($religion == "อื่นๆ"){
        $religion = $_POST['religion_input'];
    }
    $education = $_POST['education'];
    if ($education == "อื่นๆ"){
        $education = $_POST['education_input'];
    }
    $occupation = $_POST['occupation'];
    if ($occupation == "อื่นๆ"){
        $occupation = $_POST['occupation_input'];
    }
    $insure = $_POST['insure'];
    $add_no = $_POST['add_no'];
    $add_mhoo = $_POST['add_mhoo'];
    $add_building_village = $_POST['add_building_village'];
    $add_soi = $_POST['add_soi'];
    $add_road = $_POST['add_road'];
    $add_subdis = $_POST['add_subdis'];
    $add_dis = $_POST['add_dis'];
    $add_province = $_POST['add_province'];
    $add_zip = $_POST['add_zip'];
    $add_hno = $_POST['add_hno'];
    $add_mno = $_POST['add_mno'];
    $add_ono = $_POST['add_ono'];
    $relate_flname = $_POST['relate_flname'];
    $relate_des = $_POST['relate_des'];
    $relate_tel = $_POST['relate_tel'];
    $input = $_POST['med_own']; //แพทย์เจ้าของไข้
    $input3 = $_POST['input3']; //แพทย์เยี่ยมบ้าน
    if(isset($_POST['surgery'])) $surgery = 1;
        else $surgery =0;
    if(isset($_POST['allergic'])) $allergic = 1;
        else $allergic =0;
    if(isset($_POST['alternative'])) $alternative = 1;
        else $alternative =0;
    if(isset($_POST['alcohol'])){
        $alcohol = $_POST['alcohol'];
        if ($alcohol ==1) $alcohol = "NO";
        else if ($alcohol ==2) {
          $alcohol = "NOW";
          if (isset($_POST['alcohol_input'])) $alcoholproblem = 0;
            else $alcoholproblem = 1;
        } 
        else {
            $alcohol = "USED";
            if (isset($_POST['alcohol_input'])) $alcoholproblem = 0;
            else $alcoholproblem = 1;
        } 
    }
    if(isset($_POST['cigarette'])){
        $cigarette = $_POST['cigarette'];
        if ($cigarette ==1) $alcohol = "NO";
        else if ($cigarette ==2) $alcohol = "NOW";
        else $cigarette = "USED";
    }
    if(isset($_POST['money'])) $money_status = 1;
                                    else $money_status = 0;
    if(isset($_POST['hypertansion'])) $hypertansion = 1; 
                                    else $hypertansion =0;
    if(isset($_POST['diabetes_mellitus'])) $diabetes_mellitus = 1;
                                    else $diabetes_mellitus =0;
    if(isset($_POST['dyslipidemia'])) $dyslipidemia = 1; 
                                    else $dyslipidemia = 0;
    if(isset($_POST['stroke'])) $stroke = 1; 
                                    else $stroke =0;
    if(isset($_POST['cad'])) $cad = 1; 
                                    else $cad=0;
    if(isset($_POST['cancer'])) $cancer = 1; 
                                    else $cancer=0;
    if(isset($_POST['other'])) $other = $_POST['other_input']; 
                                    else $cancer=0;
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'homevisit';
mysql_connect($dbhost,$dbuser,$dbpass) or die("ติดต่อฐานข้อมูลไม่ได้");
mysql_select_db($dbname) or die("เลือกฐานข้อมูลไม่ได้");
mysql_query("SET NAMES UTF8");
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
$sql20="UPDATE patientinfo SET ";
$sql20=$sql20."patient_id='$id',patient_p_name='$p_name',patient_name='$fname',patient_surname='$lname',patient_gender='$gender',patient_dateofbirth='$bday',patient_monthofbirth='$bmonth',patient_yearofbirth='$byear',patient_status='$status',patient_religion='$religion',patient_occupation='$occupation',patient_education='$education'";
$long=",patient_add_no='$add_no',patient_add_mhoo='$add_mhoo',patient_add_village='$add_building_village',patient_add_soi='$add_soi',patient_add_road='$add_road',patient_add_subdis='$add_subdis',patient_add_dis='$add_dis',patient_add_province='$add_province',patient_add_zip='$add_zip',patient_no_home='$add_hno',patient_no_mobile='$add_mno',patient_no_work='$add_ono'";
$med = ",patient_doctor_owner='$input',patient_doctor_visit='$input3'";
$relate = ",name='$relate_flname',relative='$relate_des',tel='$relate_tel'"
$sql20=$sql20.$long.$med." WHERE patient_hn = '$hn' ";
mysql_db_query($dbname,$sql20) or die (mysql_error());
//session_unset();
//session_destroy(); 
mysql_close();

 header( "location: patient_show.php?hn=".$hn );
 exit(0);
?>