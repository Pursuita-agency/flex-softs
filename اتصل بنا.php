<?php 

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$to = "marketing@flexsofts.com";
$name = $_POST['name'];
$email = $_POST["email"];
$company = $_POST["company"];
$phone = $_POST['phone'];
$area = $_POST["area"];




        $message = "===========================================================\n";
        $message.= "Name       : $name                                         \n"; 
		$message.= "Email      : $email                                        \n";
		$message.= "company    : $company                                      \n";
        $message.= "phone      : $phone                                        \n";
        $message.= "area       : $area                                         \n";
        $message.= "==================WELCOME TO BE - flexSofts================\n";






$headers = " From: " . $email;
mail($to, 'FlexSofts', $headers, $message); 
$success = '<div class="alert alert-success col-xs-12" style="text-align:center;">تم ارسال طلبك بنجاح، سيتم التواصل معكم في اقرب وقت أو يمكنكم الاتصال علي 0583944948</div>'; 

}
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ar"> <!--<![endif]-->
    <head>
        <meta name="google-site-verification" content="oNHJ9a1tJvM_3iZUrkLhZi1SeYww8va9mjttvNqhi1w" />
        <meta charset="utf-8">
        <title>إتصل بنا</title>
            <meta name="description" content="فلكس سوفت شركة سعودية تعمل في مجال حلول الاعمال والبرامج المحاسبية والادارية، تقدم الشركة مجموعة برامج في قاعدة عمل واحدة تضمن التكامل بشكل احترافي للشركات، نهدف الي تقديم حلول اعمال ترضي تطلعات عملاؤنا وتساعدهم في التخطيط لاعمالهم بشكل احترافي">
    <meta name="keywords" content="فلكس سوفت, فليكس سوفت" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.png">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target="#navbar-menu" data-offset="110" dir="rtl">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed white" style="border-bottom: 2px solid #3f92d1;">
                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->


                <div class="container"> 
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div> 

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/English%20Logo.png" class="logo" alt="">
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">الرئيسية</a></li>                    
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">من نحن</a>
                                <ul class="dropdown-menu" style="padding:20px;">
                                    <li><a href="%D9%85%D9%86%20%D9%86%D8%AD%D9%86.html">حول الشركة</a></li>
                                    <li><a href="%D9%81%D8%B1%D9%8A%D9%82%20%D8%B9%D9%85%D9%84%D9%86%D8%A7.html">فريق عملنا</a></li>
                                </ul>
                            </li>
                                      <li class="dropdown">
                                <a href="#" data-toggle="dropdown">منتجاتنا</a>
                                <ul class="dropdown-menu" style="padding:10px;">
                                    <li><a href="%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC%20%D8%A7%D9%84%D9%85%D8%AD%D8%A7%D8%B3%D8%A8%D8%A9.html" >نظام المحاسبة</a></li>
                                    <li><a href="%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC%20%D8%A7%D9%84%D9%85%D8%AE%D8%B2%D9%88%D9%86.html" >نظام المخزون</a></li>
                                    <li><a href="%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC%20%D8%A7%D9%84%D9%85%D8%B4%D8%AA%D8%B1%D9%8A%D8%A7%D8%AA.html" >نظام المشتريات</a></li>
                                    <li><a href="%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC%20%D8%A7%D9%84%D9%85%D8%A8%D9%8A%D8%B9%D8%A7%D8%AA.html" >نظام المبيعات</a></li>
                                    <li><a href="%D8%A7%D8%AF%D8%A7%D8%B1%D8%A9%20%D8%A7%D9%84%D9%85%D8%B4%D8%A7%D8%B1%D9%8A%D8%B9.html" >نظام المشاريع</a></li>
                                    <li><a href="%D8%A7%D8%AF%D8%A7%D8%B1%D8%A9%20%D8%A7%D9%84%D8%AA%D8%B5%D9%86%D9%8A%D8%B9.html" >نظام التصنيع</a></li>
                                    <li><a href="%D8%B4%D8%A6%D9%88%D9%86%20%D8%A7%D9%84%D9%85%D9%88%D8%B8%D9%81%D9%8A%D9%86.html" > نظام شئون الموظفين</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#test">مشاريعنا</a>
                            </li>
                            <li>
                                <a href="%D8%A7%D9%84%D8%A7%D8%B3%D8%A6%D9%84%D8%A9%20%D8%A7%D9%84%D8%B4%D8%A7%D8%A6%D8%B9%D9%87.html">الأسئلة الشائعه</a>
                            </li>
                            <li>
                                <a href="#">المقالات</a>
                            </li>
                            <li>
                                <a href="%D8%A7%D8%AA%D8%B5%D9%84%20%D8%A8%D9%86%D8%A7.php">إتصل بنا</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>    
            
            <!-- start Accounting Module -->
            
            <style>
            
                section .call form input, textarea{
                    display: block;
                    padding: 20px 35px;
                    border: 1px solid #3f92d1;
                    width: 100%;
                    margin-top: 13px;
                    border-radius:4px;
                }
                
                               section .call form .ic{
padding: 5px;
                }
                
                section .call form .ic i{
                          position: absolute;
    margin: 35px 13px;
    font-size: 15px;
    color: #b3b3b3;
                }
                
                section .call form .sub{
                    border: 1px solid #3f92d1;
                    background: #3f92d1;
                    color: #fff;
                }
                
                      section .call .social li{
           text-align: center;
                          border-radius: 50%;
                }
                
                section .call .social i{
                   padding: 12px 9px;
    border-radius: 50%;
    width: 28px;
                    color: #fff;
                }
                
            </style>
            
            <section>
                <div class="container">
            <div class="call col-xs-12" style="margin:170px 0 90px 0;">
                <div class="left col-xs-12 col-md-6" style="float:left">
                    <?php if (isset($success)) { echo $success; } ?>
                <h2>سجل بياناتك لطلب عرض النظام.</h2>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="ic col-xs-12 col-md-6" style="float:right">
                    <i class="fa fa-user"></i>
                <input type="text" placeholder="الإسم" name="name">
                    </div>
                    <div class="ic col-xs-12 col-md-6">
                      <i class="fa fa-envelope" aria-hidden="true"></i>  
                   <input type="email" placeholder="البريد الإليكتروني" name="email">
                    </div>
                    <div class="ic col-xs-12 col-md-6" style="float:right">
                        <i class="fa fa-building" aria-hidden="true"></i>
                    <input type="text" placeholder="الشركة" name="company">
                    </div>
                    <div class="ic col-xs-12 col-md-6">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" placeholder="رقم الهاتف" name="phone">
                    </div>
                    <div class="ic col-xs-12" style="display: inline-block;">
                        <i class="fa fa-comment" aria-hidden="true" style="margin-top:40px;"></i>
                    <textarea placeholder="اكتب رسالتك" style="height:150px;" name="area"></textarea>
                    </div>
                    <input class="sub" type="submit" value="إرسال">
                </form>
                </div>
                <div class="right col-xs-12 col-md-6" style="float:right">
                    <div class="social col-xs-12">
                <h4 class="col-xs-12 col-md-6" style="float:right;">التواصل الإجتماعي</h4>
                     <ul class="list-inline col-xs-12 col-md-6">
                                        <li style="background:#3B5998;"><a href="https://www.facebook.com/flex.softs.3" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li style="background:#55ACEE;"><a href="https://twitter.com/FlexSofts" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li style="background:#125688;"><a href="https://www.linkedin.com/in/flex-softs-895748150/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li style="background:#125688;"><a href="https://www.instagram.com/flexsofts/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li style="background:#bb0000;"><a href="https://www.youtube.com/channel/UC_dxnYTL5SOIpIKxZgEMorA/featured" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                    </div>
                <div class="map col-xs-12" style="margin-top:15px;display:inline-block;">
                
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.5537710265908!2d46.775347315001866!3d24.810728984077393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDQ4JzM4LjYiTiA0NsKwNDYnMzkuMSJF!5e0!3m2!1sen!2ssa!4v1511971402327" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
                </div>
                </div>
                    </div>
                </div>
            </section>
            <!-- end Accounting Module -->

            
            <!--Test section-->
            <section id="test" class="test bg-black roomy-60 fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">                        
                        <div class="main_test fix text-center">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="head_title text-center fix">
                                    <h2 class="text-uppercase text-white">عملاؤنا</h2>
                                    <h5 class="text-white">اراء العملاء حول الخدمة</h5>
                                </div>
                            </div>

                            <div id="testslid" class="carousel slide carousel-fade" data-ride="carousel">

                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="test_item fix">
                                                <div class="test_img fix">
                                                    <img class="img-circle" src="assets/images/%D8%B4%D8%B9%D8%A7%D8%B1%20%D8%A7%D9%84%D9%86%D8%AE%D8%A8%D8%A9%20%D8%A7%D9%84%D9%88%D8%B7%D9%86%D9%8A%D8%A9.png" alt="" />
                                                </div>

                                                <div class="test_text text-white">
                                                    <h3 style="color:#fff;">مؤسسة النخبة الوطنية للتجارة</h3>
                                                    <h5 style="color:#fff;">ابراهيم محمد - المدير العام</h5>
                                                    <em>النظام مرن ومترابط بشكل احترافي وقد ساعدني في ادارة العمليات التصنيعية في منشآتي واستطعت ادارة المواد الخام والمواد تامة الصنع بشكل احترافي، التقارير رائعة جدا في النظام وسهلة البناء واستطعت بناء عدة تقارير لوحدي بعد التدريب عليها بواسطة موظف الشركة، شكرا لكم فريق عمل فلكس سوفت</em>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End off item -->

                                    <div class="item">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="test_item fix">
                                                <div class="test_img fix">
                                                    <img class="img-circle" src="assets/images/man.png" alt="" />
                                                </div>

                                                <div class="test_text text-white">
                                                    <h3 style="color:#fff;">مؤسسة روافد التميز للتجارة</h3>
                                                    <h5 style="color:#fff;">تامر محمد علي - مدير التشغيل</h5>
                                                    <em>كنا نعاني من كثرة الاستخدامات الورقية ولكن بفضل برامج فلكس سوفت استطعنا حصر جميع عملياتنا علي النظام واصبح بامكاننا الحصول علي تقارير شاملة ومفصلة عن فواتير المبيعات
والمشتريات المدفوعة والغير مدفوعة، اكثر ما اعجبني في النظام انني قلت وداعا للاوراق والمعاناة في تجهيز التقارير للادارة</em>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End off item -->

                                    <div class="item">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="test_item fix">
                                                <div class="test_img fix">
                                                    <img class="img-circle" src="assets/images/%D8%B4%D8%B9%D8%B1%20%D9%83%D8%A7%D9%84%20%D8%A7%D9%84%D8%B7%D8%A8%D9%8A%D8%A9.png" alt="" />
                                                </div>

                                                <div class="test_text text-white">
                                                    <h3 style="color:#fff;">مؤسسة تطوير كال الطبية</h3>
                                                    <h5 style="color:#fff;">آسامة كمال - المدير المالي</h5>
                                                    <em>ساعدني النظام في متابعة الشؤون المالية بشكل احترافي، نظام مرن وسهل واستطعت اضافة حقول علي الشاشات والتعديل علي المطبوعات بكل سهولة ومجانا، الدعم ممتاز واجد سرعة في الاجابة علي تساؤلاتي، اتمني لكم التوفيق</em>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End off item -->
                                    
                                     <div class="item">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="test_item fix">
                                                <div class="test_img fix">
                                                    <img class="img-circle" src="assets/images/man.png" alt="" />
                                                </div>

                                                <div class="test_text text-white">
                                                    <h3 style="color:#fff;">Sattam Spare Parts Establishment</h3>
                                                    <h5 style="color:#fff;">Noel Thomas - CEO</h5>
                                                    <em>I started using flex softs software 4 months ago and now I feel everything is very close to my hand, I am traveling too much and happy that I can access my software anywhere anytime, Thank you Flexsofts Team</em>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End off item -->

                                </div><!-- End off carosel inner -->

                                <!-- Controls -->
                                <a class="left carousel-control" href="#testslid" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    <span class="sr-only">Previous</span>
                                </a>

                                <a class="right carousel-control" href="#testslid" role="button" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>

                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off test section -->

            
            
            
            <!--Call to  action section-->
            <section id="action" class="action bg-blue roomy-40">
                <div class="container">
                    <div class="row">
                        <div class="maine_action">
                            <div class="col-md-8">
                                <div class="action_item text-center">
                                    <h2 class="text-white text-uppercase">يمكنك الآن تسجيل الدخول والتجربة مجاناً</h2>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action_btn text-left sm-text-center">
                                    <a href="" class="btn btn-default">سجل الآن مجاناً</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <footer id="contact" class="footer action-lage bg-black p-top-80">
                <!--<div class="action-lage"></div>-->
                <div class="container">
                    <div class="row" style="padding-bottom:20px;">
                        <div class="widget_area">
                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">حول الشركة</h5>
                                    <p class="m-top-20">مؤسسة سعودية تعمل في مجال تقنية المعلومات والأنظمة المحاسبية والإدارية ERP Software</p>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">العنوان</h6>
                                            <p>
                                                 السعودية / الرياض - حي اليرموك -طريق الصحابه</p>
                                        </div>
                                    </div>
                                        <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">البريد الإليكتروني :</h6>
                                            <p>info@flexsofts.com</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">الهاتف :</h6>
                                            <p>0112533399</p>
                                            <p>0583944948</p>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_latest sm-m-top-50">
                                    <h5 class="text-white">آخر التدوينات</h5>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="widget_latst_item_text">
                                            <p><a href="%D9%85%D9%82%D8%A7%D9%84%D8%A7%D8%AA.html" target="_blank"> آخر المقالات >></a></p>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="widget_latst_item_text">
                                           <img src="assets/images/QR_Code_flexsofts.png" style="width: 65%;position: relative;left: -140px;top: 160px;">
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_service sm-m-top-50">
                                    <h5 class="text-white">روابط سريعه</h5>
                                    <ul class="m-top-10">
                                        <li class="m-top-20"><a href="%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC%20%D8%A7%D9%84%D9%85%D8%AD%D8%A7%D8%B3%D8%A8%D8%A9.html"><i class="fa fa-angle-right"></i> برنامج المحاسبة</a></li>
                                        <li class="m-top-20"><a href="%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC%20%D8%A7%D9%84%D9%85%D8%A8%D9%8A%D8%B9%D8%A7%D8%AA.html"><i class="fa fa-angle-right"></i> برنامج المبيعات</a></li>
                                        <li class="m-top-20"><a href="%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC%20%D8%A7%D9%84%D9%85%D8%AE%D8%B2%D9%88%D9%86.html"><i class="fa fa-angle-right"></i> برنامج المخزون</a></li>
                                        <li class="m-top-20"><a href="%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC%20%D8%A7%D9%84%D9%85%D8%B4%D8%AA%D8%B1%D9%8A%D8%A7%D8%AA.html"><i class="fa fa-angle-right"></i> برنامج المشتريات</a></li>
                                        <li class="m-top-20"><a href="%D8%A7%D9%84%D8%A7%D8%B3%D8%A6%D9%84%D8%A9%20%D8%A7%D9%84%D8%B4%D8%A7%D8%A6%D8%B9%D9%87.html"><i class="fa fa-angle-right"></i> الأسئلة الشائعه</a></li>
                                    </ul>

                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_newsletter sm-m-top-50">
                                    <h5 class="text-white">إشترك معنا</h5>
                                    <form class="form-inline m-top-30">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="ادخل بريدك الإليكتروني">
                                            <button type="submit" class="btn text-center"><i class="fa fa-arrow-right"></i></button>
                                        </div>

                                    </form>
                                    <div class="widget_brand m-top-40">
                                        <a href="" class="text-uppercase"><img src="assets/images/English%20Logo.png"></a>
                                        <p style="padding-top:20px;"> أنظمة عملية وسهلة لإدارة الأعمال</p>
                                    </div>
                                    <ul class="list-inline m-top-30">
                                        <li style="background:#3B5998;"><a href="https://www.facebook.com/flex.softs.3" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li style="background:#55ACEE;"><a href="https://twitter.com/FlexSofts" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li style="background:#125688;"><a href="https://www.linkedin.com/in/flex-softs-895748150/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li style="background:#125688;"><a href="https://www.instagram.com/flexsofts/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li style="background:#bb0000;"><a href="https://www.youtube.com/channel/UC_dxnYTL5SOIpIKxZgEMorA/featured" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                    </ul>

                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                        </div>
                    </div>
                </div>
                <div class="mapp" style="margin-bottom:20px;border: 1px solid #000;padding: 5px 0px 0px 0px;background: #222;">
                
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.5523129183784!2d46.775746814585794!3d24.810778884077394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2efe5015d2a0a1%3A0xf41f35727ecc77f0!2sFlex+Softs!5e0!3m2!1sen!2ssa!4v1512692282499" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                
                </div>
                <div class="col-md-12">
                                <div class="action_btn text-left sm-text-center" style="text-align:center;">
                                    <a href="%D8%A7%D8%AA%D8%B5%D9%84%20%D8%A8%D9%86%D8%A7.php" class="btn btn-success" style="border-color: #4cae4c;">طلب عرض النظام مجاناً</a>
                                </div>
                            </div>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-12">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                            <i class="fa fa-heart"></i>
                            <a href="index.html">فليكس سوفت</a> 
                            جميع الحقوق محفوظة &copy; 2018
                        </p>
                    </div>
                </div>
            </footer>





        </div>

        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/bootsnav.js"></script>



        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
