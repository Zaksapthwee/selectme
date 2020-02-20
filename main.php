<?php 
    session_start();
    if($_SESSION["userLevel"]==""){
        alert("กรุณา Login ก่อน");
        backtoindex();
        exit();
    }
    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    function backtoindex(){
        echo "<script>  window.location.href='index.php'; </script>";
    }
    
    function GetNameAgent($idAgent){
        include("dblink.php");
        $sql = "SELECT agent.agent_name FROM agent JOIN login on agent.login_id = login.login_id where agent_id = '$idAgent'";
        $query = mysqli_query($dbcon,$sql);
        $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
        return $result['agent_name'];

        
    }

?>
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/style.css"> 
<head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/active.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SM_SELECT ME</title>
    <meta name="keywords" content="ขนส่ง, รวมขนส่ง, บริการขนส่ง, ส่งด่วน, ส่งของTBL">  
    <meta name="description" content="การส่งของราคาถูก จองขนส่งและชำระค่าบริการออนไลน์ได้ทันที ที่สำคัญไม่ต้องจ้างขนส่งข้างนอกแพง">
    <link rel="shortcut icon" href="img/smicon.png" type="image/x-icon"> 
    <link rel="stylesheet" type="text/css" href="css/fontpage.css">
</head>
<body>
<header>
        <div class="top_menu_mobile_toggle">
            <div class="header-mobile">
                <div class="padding-mobile">
                    <div class="left-menu">
                        <a class="logo-mobile" href="main.php" title="SELECTME"><img alt="SELECTME" height="32" src="img/Logo_SM.png"></a>
                    </div>
                    <div class="right-menu">
                        <a data-name="shortcut-tracking"    class="a-mobile" href="tracking.php"><i class="fa fa-truck fa-2x "></i></a>
                        <a data-name="shortcut-openmenu"    class="a-mobile show-menu-mobile" href="#"><i class="fa fa-bars fa-2x"></i></a>
                    </div>
                    <div class="clear-float"></div>
                </div>
            </div>
            <div class="toolbar ">
                <ul class="main-menu">
                    <li class="li-header">ชื่อผู้ใช้ : <?php  if($_SESSION['userLevel']=="agent"){echo GetNameAgent($_SESSION['agentId']); } else{echo "คุณวิน (Admin)"; }?> <br></li>
                    <li class="li-menu"><a data-name="home" href="tracking.php">ติดตามสถานะ</a></li>
                    <li class="li-menu"><a data-name="contact" href="contact.php">ติดต่อเรา</a></li>
                    <li class="li-menu"><a data-name="sum" href="report.php">รายงาน</a></li>
                    <li class="li-menu"><a data-name="logout" href="logout.php" style="color:red;">ออกจากระบบ</a></li>

                    <div class="clear-float"></div>
                    <li class="li-etc">
                        <div>
                            <span style="font-weight:800">ติดต่อเรา</span><br>
                            บริษัท ไทยเบฟเวอเรจ จำกัด (มหาชน)
                            เลขที่ 14 ถนนวิภาวดีรังสิต แขวงจอมพล เขตจตุจักรกรุงเทพมหานคร 10900<br>
                            <br>
                            โทร. (02) 785 5555<br>
                            Facebook : www.facebook.com/ThaiBeverage </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="nav-full">
            <div class="inner-nav-full">
                <div class="left-menu">
                    <a href="main.php" title="SMselectmelogo"><img class="logo-shippop" alt="SMselectmelogo" src="img/Logo_SM.png"></a>
                    <nav>
                        <div class="li-front-menu">
                            <a data-name="home" class="member-menu active" href="menu_member.php">
                                หน้าแรก </a>
                        </div>
                        <div class="li-front-menu">
                            <a data-name="contact" class="member-menu " href="#">
                                ติดต่อเรา </a>
                        </div>
                        <div class="clear-float"></div>
                    </nav>
                </div>
                <div class="right-menu">
                <div>
                    <div class="right-sub-right-menu">
                        ชื่อผู้ใช้ : <b> <?php  if($_SESSION['userLevel']=="agent"){echo GetNameAgent($_SESSION['agentId']); }
                                                else{echo "คุณวิน (Admin)"; }?> 
                                    </b>
                        <a href="logout.php" ><button type="button" class="login-btn" style="width:110px;" > ออกจากระบบ </button> </a>
                    </div>
                </div>

                
                    <!-- <div class="float-right" style="float:right;position: relative">
                        <button type="button" class="language-btn">
                            TH </button>
                        <div class="menu-language">
                            <a href="#" class="language-change-btn first">TH</a>
                            <a href="#" class="language-change-btn last">EN</a>
                        </div>
                    </div> -->
                    <div class="clear-float"></div>
                    <div style="margin-top:7px;">
                        <form action="#" method="get">
                            
                            <input type="text" name="tracking_code" class="search-box" placeholder="กรอกหมายเลขติดตามการส่งสินค้า" autocomplete="off">
                            <button class="btn-search"><img alt="" src="//www.shippop.com/assets/images/frontpage/icon_search.png?v=1.03484"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
 
    <section class="service-section">
        <div class="wrapper-1000">
            <h2>บริการของเรา</h2>
            <h3>ทำให้การส่งสินค้า สะดวกและง่ายมากขึ้น</h3>
            <div class="service-box">
                <div class="service-item">
                    <div class="service-card"><a href="selectme_member.php" class="bug-service-card"></a> <img src="//www.shippop.com/assets/images/frontpage/icon_service_01.png?v=1496789498" alt="เปรียบเทียบราคา">
                        <div class="title">ใช้บริการ Select Me</div>
                        <div class="service-caption">เลือกใช้บริการจองรถ</div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-card"><a href="myrequest.php" class="bug-service-card"></a> <img src="img/icon/icon_service_04.png" alt="ขนส่งที่เหมาะ">
                        <div class="title">ประวัติการใช้บริการ</div>
                        <div class="service-caption">สรุปประวัติการใช้บริการ</div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-card"><a href="tracking.php" class="bug-service-card"></a> <img src="//www.shippop.com/assets/images/frontpage/icon_service_05.png?v=1496789498" alt="ติดตามพัสดุ">
                        <div class="title">ติดตามสถานะ</div>
                        <div class="service-caption">ตรวจสอบสถานะการจัดส่งสินค้า</div>
                    </div>
                </div>
                <div class="service-item"  id="service_06" style="display: block;">
                    <div class="service-card"> <a href="report.php" class="bug-service-card"></a><img src="//www.shippop.com/assets/images/frontpage/icon_service_06.png?v=1496789498" alt="คุมรายจ่ายง่ายขึ้น">
                        <div class="title">รายงาน</div>
                        <div class="service-caption">สรุปรายงาน</div>
                    </div>
                </div>
                <div class="clear-float">&nbsp;</div>
            </div>
        </div>
    </section>
    
</body>
</html>