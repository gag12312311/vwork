<?php 
  ini_set('display_errors', 0);
  ini_set('display_startup_errors', 0);
  error_reporting(E_ALL);
 session_start();
 require_once "Login_v1/components/DBconn.php"
 ?>

<!DOCTYPE html>
<html>
  <head>
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
      .slogan {
        position: absolute;
        top: 200px;
        left: 20px;
        color: black;
        font-weight: 700;
      }
      @media (max-width: 1120px) {
        .slogan {
            display: none;
        }
      }
    </style>
  </head>

  <body>
    <div class="hero_area">
      <!-- header section strats -->
        <h1 class="slogan">
          Հարմար էջ <br> գյուղացիների համար ովքեր <br> փնտրում են <br> աշխատանք կամ աշխատող.
        </h1>
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

    
    <div class="container-fluid">
      <h1 style="text-align:center;margin-top: 30px; margin-bottom: 30px;">Վերջին ավելացված հայտարարությունները</h2>
      <div class="row">
        <div class="col-xl-5 col-12 m-1 border">
          <h4 style="text-align: center;margin-bottom: 20px;">Աշխատանքներ</h4>
          <?php 
            $sql = "SELECT * FROM posts_list WHERE user_type = 'Աշխատատու' ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              $i = 0;
              while($row = $result->fetch_assoc()) {
                if ($i > 4) {
                  echo "<a href='Login_v1/components/allPosts.php/works'>Դիտել բոլորը</a>";
                  break;
                }
                echo '<div class="container">
              <div class="row">
                <div class="col-7">
                  <a href="Login_v1/components/postId.php/' . $row["id"] .'">' . $row["post_name"] . '</a>
                  <p>Ոլորտը - ' . $row["type"] . '</p>
                </div>
                <div class="col-3">
                  <p>' . $row["user_name"] . '</p>
                  <p>Հեռ. ' . $row["tel_num"] . '</p>
                </div>
                <div class="col-2">
                  <p>' . $row["data"] . '</p>
                </div>
              </div>
            </div>
            <hr>';
            $i++;
              }
            }
           ?>
        </div> 
        <div class="col-xl-1 col-12"></div>
        <div class="col-xl-5 col-12 m-1 border">
          <h4 style="text-align: center;margin-bottom: 20px;">Աշխատողներ</h4>
          <?php 
            $sql = "SELECT * FROM posts_list WHERE user_type = 'Աշխատող' ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              $i = 0;
              while(($row = $result->fetch_assoc())) {
                if ($i > 4) {
                  echo "<a href='Login_v1/components/allPosts.php/workers'>Դիտել բոլորը</a>";
                  break;
                }
                echo '<div class="container">
              <div class="row">
                <div class="col-7">
                  <a href="Login_v1/components/postId.php/' . $row["id"] .'">' . $row["post_name"] . '</a>
                  <p>Ոլորտը - ' . $row["type"] . '</p>
                </div>
                <div class="col-3">
                  <p>' . $row["user_name"] . '</p>
                  <p>Հեռ. ' . $row["tel_num"] . '</p>
                </div>
                <div class="col-2">
                  <p>' . $row["data"] . '</p>
                </div>
              </div>
            </div>
            <hr>';
            $i++;
              }
            }
           ?>
        </div>
      </div>
    </div>

    <!-- info section -->
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

    <!-- end info section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        &copy; Все права защищены Гаг-ом:
      </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script>
      function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
          .querySelector(".custom_menu-btn")
          .classList.toggle("menu_btn-style");
      }

    </script>
  </body>
</html>
