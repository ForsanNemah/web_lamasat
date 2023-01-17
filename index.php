<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مؤسسة لمسات العالمية للمقاولات</title>
    
<?php include 'include/head-link.html';  ?>
</head>
<body class="container">
 <header>
<?php include 'include/top-header2.html'; ?>
<?php include 'include/header.html';  ?>
 </header>
 <main class="mt-5 pt-5">
<!-- نبذة عن المؤسسة -->
<section id="about">
<?php include 'about.html';  ?>
</section>
<!-- أنواع الخدمات -->
<section id="services">
<?php include 'services.html';  ?>
</section>
<!-- عرض صور من اعمالنا -->
<section id="business">
<?php include 'business.html';  ?>
</section>
 </main> 
 <!-- ========== -->
 <footer id="foot">
 <?php include 'include/footer.html';  ?>
 </footer>  
</body>
<script>
// $('header').hide().fadeIn(500);
$('nav a').click(
    function()
    {

        let id=$(this).attr('href');
$(id).hide().fadeIn(1000);
document.location.reload();
// if(!($('#btn-head').css('display')=='none'))
// $('#header').hide();
    }
);
// $('#btn-head').click(
//     function()
//     {
//         if(($('#header').css('display')=='none'))
// {$('#header').show();
// }
// else
// {
//     $('#header').hide();
// }

//     }
// );

// $('.main_menu').css("position","relative");
// $('.main_menu').css("right","0px");
// $('.main_menu').animate({
//                 "right":"+=8%",
                
//             });

</script>
</html>