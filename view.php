<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>KD Bank </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
    <link href="stylesheets/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="images/favicon.png">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">KD Bank</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="view.php">View</a></li>
                <li><a href="transactions.php">Transactions</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
      	<h1>Greetings user!</h1>
                <hr>
                
      	<table class="table tabel-condensed">
                    <caption>Statements and balances</caption>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>$$$</th>
                            <th>Balance</th>
                            <th>Decription</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10/3/13</td>
                            <td class="danger">-$1000.00</td>
                            <td>$10.00</td>
                            <td>Transfer funds (Pending)</td>
                        </tr>
                        <tr>
                            <td>10/3/13</td>
                            <td class="danger">-$1000.00</td>
                            <td>$10.00</td>
                            <td>Transfer funds (Pending)</td>
                        </tr>
                        <tr>
                            <td>10/3/13</td>
                            <td class="danger">-$1000.00</td>
                            <td>$10.00</td>
                            <td>Transfer funds (Pending)</td>
                        </tr>
                        <tr>
                            <td>10/3/13</td>
                            <td class="danger">-$1000.00</td>
                            <td>$10.00</td>
                            <td>Transfer funds (Pending)</td>
                        </tr>
                    </tbody>
                </table>
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="javascripts/jquery.js"></script>
    <script src="javascripts/bootstrap-transition.js"></script>
    <script src="javascripts/js/bootstrap-alert.js"></script>
    <script src="javascripts/bootstrap-modal.js"></script>
    <script src="javascripts/bootstrap-dropdown.js"></script>
    <script src="javascripts/bootstrap-scrollspy.js"></script>
    <script src="javascripts/js/bootstrap-tab.js"></script>
    <script src="javascripts/bootstrap-tooltip.js"></script>
    <script src="javascripts/bootstrap-popover.js"></script>
    <script src="javascripts/bootstrap-button.js"></script>
    <script src="javascripts/js/bootstrap-collapse.js"></script>
    <script src="javascripts/js/bootstrap-carousel.js"></script>
    <script src="javascripts/bootstrap-typeahead.js"></script>

  </body>
</html>