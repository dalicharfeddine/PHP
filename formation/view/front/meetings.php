<?php
include_once '../../config.php';
include_once '../../controller/formationC.php';
session_start();

$formation=new formationC();
$prod=$formation->afficherformationssup0();
/*
if(!empty($_SESSION['role']))
{

    if($_SESSION['role']==1||$_SESSION['role']==2)
    {

*/



?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education - List of Meetings</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

   

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>This is an educational <em>HTML CSS</em> template by TemplateMo website.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                          Edu Meeting
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                 <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li><a href="meetings.PHP">Formation</a></li>
                          <li class="scroll-to-section"><a href="#apply">Apply Now</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Connecte</a>
                              <ul class="sub-menu">
                                  <li><a href="compte.php">Cree compte</a></li>
                                  <li><a href="conn.php">Connexion</a></li>
                              </ul>
                          </li>
                          <li><?php 
    if(!empty($_SESSION['rol']))
{

    if($_SESSION['rol']==1)
    {
?>
                        <a href="decfront.php"> <i class="menu-icon fa fa-dashboard"></i> Déconnecter </a>


                        <?php 
                    }
                }
                        ?></li>
                          
                      </ul> 
                          </li>
                          <li><a href="index.html">Courses</a></li> 
                          <li><a href="index.html">Contact Us</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Here are our upcoming meetings</h6>
          <h2>Upcoming Meetings</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="filters">
                <ul>
                  <li> 
                   <form method="post" action="filtre.php">  
                  <select name="type" >
                
<option value="presentiel">Presentiel</option>
  <option value="en_ligne">En ligne</option>

         </select>
 
         <button type="submit" name="Ajouter" value="Ajouter" class="btn btn-danger">Filtre</button>
       </form>
     </li>
     <li>
              
                        <form method="post" action="searchfront.php">  
            <input type="search" name="rech">
 
         <button type="submit" name="Ajouter" value="Ajouter" class="btn btn-danger">Recherche </button>
       </form>
     </li>
     <?php
     if(!empty($_SESSION['rol']))
{

    if($_SESSION['rol']==1)
    {

                         
?>
          <li>
              
                        <form method="post" action="affichefav.php">  
       
 
         <button type="submit" name="Ajouter" value="Ajouter" class="btn btn-danger">Consulter favorie </button>
       </form>
     </li>

  <?php 
                     }
                   }
                          ?>
                </ul>
              </div>
            </div>
             <?php
foreach($prod as $pro){

?>

            <div class="col-lg-12">
              <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$<?php echo $pro['prix'] ?></span>
                      </div>
                      <a href="meeting-details.php?id=<?php echo $pro['id_formation'] ?> "><?php echo"<img src='../back/uploads/".$pro['image']."'>" ?></a>
                          <style>
            img{
            width: 385px;
                        height: 350px;         
            }
            
            </style>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6><?php echo $pro['dat'] ?></h6>
                      </div>
                      <a href="meeting-details.php"><h4><?php echo $pro['Nom'] ?></h4></a>
                      <p><?php echo $pro['description'] ?></p>
<?php
     if(!empty($_SESSION['rol']))
{

    if($_SESSION['rol']==1)
    {


?>
                        
 <form  method="GET" action="parti.php">
                                
                           <input type="hidden" name="id_formation"  value="<?php echo $pro['id_formation'] ?>">
                           <button type="submit" name="Ajouter" value="" class="btn btn-danger">Participer</button>
                         
                         </form>
                         <br>
                          <form  method="GET" action="favoriefct.php">
                                 <input type="hidden" name="id_fav"  value="">
                           <input type="hidden" name="id_formation"  value="<?php echo $pro['id_formation'] ?>">
                           <button type="submit" name="Ajouter" value="" class="btn btn-danger">Ajouter au favorie</button>
                         
                         </form>

                        <?php
                    }
                    else { ?>

         <form  method="GET" action="conn.php">


                           <button type="submit" name="Ajouter" value="" class="btn btn-danger">Connecter pour Participer</button>

                         </form>

                          <?php
                     }
                     }     else {
                          ?>
 <form  method="GET" action="conn.php">
                                
                    
                           <button type="submit" name="Ajouter" value="" class="btn btn-danger">Connecter pour Participer</button>
                         
                         </form>

  <?php 
                     }
                          ?>

                    </div>
                  </div>
                </div>

        
              </div>

            </div>

                                      <?php
}

?>
            <div class="col-lg-12">
              <div class="pagination">
                <ul>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com/page/1" target="_parent" title="website templates">TemplateMo</a></p>
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>


  </body>

</html>
