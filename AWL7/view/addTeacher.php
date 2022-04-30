<html>
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>UMS - Add Student</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

    <!-- Plugins css -->
    <link rel="stylesheet" href="assets/plugins/charts-c3/c3.min.css"/>

    <!-- Core css -->
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/theme1.css"/>






    <style>
      .register {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        margin-top: 3%;
        padding: 3%;
      }
      .register-left {
        text-align: center;
        color: #fff;
        margin-top: 4%;
      }
      .register-left input {
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
      }
      .register-right {
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
      }
      .register-left img {
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite alternate;
        animation: mover 1s infinite alternate;
      }
      @-webkit-keyframes mover {
        0% {
          transform: translateY(0);
        }
        100% {
          transform: translateY(-20px);
        }
      }
      @keyframes mover {
        0% {
          transform: translateY(0);
        }
        100% {
          transform: translateY(-20px);
        }
      }
      .register-left p {
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
      }
      .register .register-form {
        padding: 10%;
        margin-top: 10%;
      }
      .btnRegister {
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #0062cc;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
      }
      .register .nav-tabs {
        margin-top: 3%;
        border: none;
        background: #0062cc;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
      }
      .register .nav-tabs .nav-link {
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
      }
      .register .nav-tabs .nav-link:hover {
        border: none;
      }
      .register .nav-tabs .nav-link.active {
        width: 100px;
        color: #0062cc;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
      }
      .register-heading {
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
      }
    </style>
  </head>


  <body>

    <?php
    session_start();
    if (!isset($_SESSION['uname']))
    {
        header('Location: ../view/login.html');
    }
    //include '../view/header.php';
    include '../model/tabledb.php';
    ?>
    <div class="container register">
      <div class="row">
        <div class="col-md-3 register-left">
          <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
          <h3>University Managment System</h3>
          <p>You can add student </p>
          <input type="submit" name="" value="UMS" /><br />
        </div>
        <div class="col-md-9 register-right">
          <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div
              class="tab-pane fade show active"
              id="home"
              role="tabpanel"
              aria-labelledby="home-tab"
            >
              <h3 class="register-heading">Teacher Student</h3>
              <div class="row register-form">

                <!-- form start -->
                <form action="../controller/teacherAction.php" method="post" enctype="multipart/form-data">

                <div class="col-md-12">

                  <div class="form-group">

                    <!-- <input
                      type="text"
                      class="form-control"
                      placeholder="First Name *"
                      value=""
                    /> -->
                    <label for="tid">Teacher ID</label>
                    <input class="form-control" id="tid" type="text" name="tid" placeholder="Teacher ID"> <br><br>

                  </div>


                  <div class="form-group">

                    <!-- <input
                      type="text"
                      class="form-control"
                      placeholder="Last Name *"
                      value=""
                    /> -->

                    <label for="name">NAME</label>
                     <input class="form-control" id="name" type="text" name="name" placeholder="Name"> <br><br>


                  </div>


                  <div class="form-group">

                    <!-- <input
                      type="password"
                      class="form-control"
                      placeholder="Password *"
                      value=""
                    /> -->

                    <label for="contact">Contact </label>
                    <input class="form-control" id="contact" type="text" name="contact" placeholder="contact"> <br><br>

                  </div>


                  <div class="form-group">

                    <!-- <input
                      type="password"
                      class="form-control"
                      placeholder="Confirm Password *"
                      value=""
                    /> -->

                    <label for="dept">DEPARMENT</label>
                    <input class="form-control" id="dept" type="text" name="dept" placeholder="dept"> <br><br>

                  </div>



                 
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    
                    <!-- <input
                      type="email"
                      class="form-control"
                      placeholder="Your Email *"
                      value=""
                    /> -->

                    <label for="address">Address</label>
                    <input class="form-control" id="address" type="text" name="address" placeholder="address"> <br><br>

                  </div>
                  </div>


                  
                  
                  <!-- <div class="col-md-12 form-group">
                    
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Enter Your Answer *"
                      value=""
                    />

                  </div> -->
                  <input type="submit" class="btnRegister" value="Register" />

                </form>

                  
                </div>
              </div>
            </div>




            
          </div>
        </div>
      </div>
    </div>


    <button class="btn btn-success col-md-12"><a href="home.php">Back To Homepage</a></button>
    <script type="text/javascript"></script>
  </body>
</html>
