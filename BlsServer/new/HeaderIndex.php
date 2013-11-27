  <meta charset="utf-8">
    <title>Profile</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" ></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<script src="js/jsIndex.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 600px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      
       /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 10;

      margin-bottom: 0px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }
    
    /*add*/
    
   input[type=checkbox].css-checkbox {
		position: absolute; 
		overflow: hidden; 
		clip: rect(0 0 0 0); 
		height:1px; 
		width:1px; 
		margin:-1px; 
		padding:0;
		border:0;
	}

	input[type=checkbox].css-checkbox + label.css-label {
		padding-left:20px;
		height:15px; 
		display:inline-block;
		line-height:15px;
		background-repeat:no-repeat;
		background-position: 0 0;
		font-size:15px;
		vertical-align:middle;
		cursor:pointer;
	}

	input[type=checkbox].css-checkbox:checked + label.css-label {
		background-position: 0 -15px;
	}

	.css-label{ background-image:url(http://csscheckbox.com/checkboxes/mac-style.png); }
	
	/*add2*/

	.css_btn_class {
		font-size:16px;
		font-family:Arial;
		font-weight:normal;
		-moz-border-radius:8px;
		-webkit-border-radius:8px;
		border-radius:8px;
		border:1px solid #84bbf3;
		padding:9px 18px;
		text-decoration:none;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #79bbff), color-stop(100%, #378de5) );
		background:-moz-linear-gradient( center top, #79bbff 5%, #378de5 100% );
		background:-ms-linear-gradient( top, #79bbff 5%, #378de5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5');
		background-color:#79bbff;
		color:#ffffff;
		display:inline-block;
		text-shadow:1px 1px 0px #528ecc;
 		-webkit-box-shadow:inset 1px 1px 0px 0px #bbdaf7;
 		-moz-box-shadow:inset 1px 1px 0px 0px #bbdaf7;
 		box-shadow:inset 1px 1px 0px 0px #bbdaf7;
	}.css_btn_class:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #378de5), color-stop(100%, #79bbff) );
		background:-moz-linear-gradient( center top, #378de5 5%, #79bbff 100% );
		background:-ms-linear-gradient( top, #378de5 5%, #79bbff 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff');
		background-color:#378de5;
	}.css_btn_class:active {
		position:relative;
		top:1px;
	}
	
	/*add3*/
	
	.fontsize{
		font-size:14px;
	}
	
	/*add4*/
	.box {
		float: left;
		background-color: 87cefa;
		border-radius: 20px;
	}
	
	div.kadomaru {
   		-moz-border-radius: 20px;    /* Firefox */
   		-webkit-border-radius: 20px; /* Safari,Chrome */
   		border-radius: 20px;         /* CSS3 */

   		border: 3px #0000ff solid;     /* 枠線の装飾 */
   		background-color:;   /* 背景色 */
	}
	
	/*add5*/
	.clear{
		clear:both
	}
	
	/*
	.boxContainer {
		overflow: hidden;
		display: flex;
		display: -moz-flex;
		display: -o-flex;
		display: -webkit-flex;
		display: -ms-flex;
		flex-direction: row;
		-moz-flex-direction: row;
		-o-flex-direction: row;
		-webkit-flex-direction: row;
		-ms-flex-direction: row;
	}
	
	.boxContainer:before,
	.boxContainer:after{
		content: "";
		display: table;		
	}
	
	.boxContainer:after{
		clear: both;
	}
	.boxContainer{
		zoom: 1;
	}
	*/


    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">