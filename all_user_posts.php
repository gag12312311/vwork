<?php 
  ini_set('display_errors', 0);
  ini_set('display_startup_errors', 0);
  error_reporting(E_ALL);
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $_SESSION['user']['name'] ?></title>
   <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Vwork</title>

    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
    />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins|Raleway:400,600|Righteous&display=swap"
      rel="stylesheet"
    />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <style type="text/css">
      .userAvatar {
        width: 100px;
        height: 100px;
        background-color: <?php echo "#" . $_SESSION['post']['color'] ?>;
        border-radius: 50%;
      }
      .userAvatar h3{
        text-align: center;
        padding-top: 30px;
        font-size: 30px;
        font-weight: bold;
        color: white;
      }

      .postDiv {
        border-radius: 10px;
        background-color: #adb5bd;
      }
      .postDiv h6 {
        margin-top: 25px;
      }
      @media (max-width: 768px){
        .post_data{
          display: none;
        }
      }
    </style>
</head>
<body style="background-color: #f6f6f6;">
  <script>
      function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
          .querySelector(".custom_menu-btn")
          .classList.toggle("menu_btn-style");
      }

    </script>
  <div class="hero_area" style="height: 100%;">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <span>
                Vwork
              </span>
            </a>

            <div class="navbar-collapse" id="">
              <div
                class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center mt-3"
              >
                <form class="form-inline mb-3 mb-lg-0 " action="Login_v1/components/find.php" method="post">
                  <input type="text" name="find">
                  <button
                    class="btn  my-sm-0 nav_search-btn"
                    type="submit"
                  ></button>
                </form>
                <ul class="navbar-nav  mr-5">
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="Login_v1/authorization.php">
                      <?php 
                      if (!$_SESSION['user']) {
                        echo "<span>Մուտք</span>";
                      }
                      ?>
                      
                       <img style="border-radius: 50%; width: 50px; height: 50px;" src="images/acc_logo.png">
                    </a>
                  </li>
                </ul>
              </div>

              <div class="custom_menu-btn">
                <button onclick="openNav()">
                  <span class="s-1"> </span>
                  <span class="s-2"> </span>
                  <span class="s-3"> </span>
                </button>
              </div>
              <div id="myNav" class="overlay">
                <div class="overlay-content">
                  <a href="index.php">Գլխավոր</a>
                  <a href="profile.php">Քո էջը</a>
                  <a href="Login_v1/components/allPosts.php/works">Աշխատանքներ</a>
                  <a href="Login_v1/components/allPosts.php/workers">Աշխատողներ</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
    </div>
    <div class="container" style="margin-top: 30px;">
            <div class="row border postDiv p-1 my-2">
                <div class="col-7">
                  <h6>Պռոյեկտ</h6>
                </div>
                <div class="col-3">
                  <h6><?php echo $_SESSION['user1'] ?></h6>
                </div>
                <div class="col-2 post_data">
                  <h6>Ավելացման ամսաթիվ</h6>
                </div>
              </div>
          </div>
    <?php 
      require_once "Login_v1/components/posts.php";
      new Posts(true);
     ?>


    <section class="info_section layout_padding" style="margin-top: 30px;">
      <div class="container info_content">
        <div>
          <div class="row">
            <div class="col-md-3">
              <div class="d-flex">
                <h5>
                  <a href="index.php">Գլխավոր</a>
                </h5>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex">
                <h5>
                  <a href="profile.php">Քո էջը</a>
                </h5>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex">
                <h5>
                  <a href="Login_v1/components/allPosts.php/works">Աշխատանքներ</a>
                </h5>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex">
                <h5>
                  <a href="Login_v1/components/allPosts.php/workers">Աշխատողներ</a>
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline"
        >
          <div class="social-box">
          </div>
          <div class="form_container mt-5">
            <form  action="Login_v1/components/find.php" method="post">
              <label for="search">
                VWork
              </label>
              <input
                type="text"
                placeholder="Գրեք բառը"
                id="search"
                name="find"
              />
              <button type="submit">
                Փնտրել
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="container-fluid footer_section">
      <p>
        &copy; Все права защищены Гаг-ом:
      </p>
    </section>
  </body>
</html>
