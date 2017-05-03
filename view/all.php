<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 
    @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    -->
    <link rel="stylesheet" type="text/css" href="resource/css/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="resource/css/FontAwesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="resource/css/common.css">
    <?php
    // ON INCLUT LA FEUILLE CSS SPECIFIQUE A LA PAGE
    if (!empty($_GET['page']) && is_file('resource/css/'.$_GET['page'].'.css')) {
        echo "<link rel='stylesheet' type='text/css' href='resource/css/".$_GET['page'].".css'>";
        echo "\n";
    }
    ?>
    <!-- 
    @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    -->
    <!--Polices--> 
    <!--
    @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    -->
    <script type="text/javascript" src="resource/js/JQuery_1.12.4.js"></script>
    <script type="text/javascript" src="resource/js/common.js"></script>
    <?php
    // ON INCLUT LA FEUILLE JS SPECIFIQUE A LA PAGE
    if (!empty($_GET['page']) && is_file('resource/js/'.$_GET['page'].'.js')) {
        echo "<script type='text/javascript' src='resource/js/".$_GET['page'].".js'></script>";
        echo "\n";
    }
    ?>
</head>

<body>
    <header>
       
    </header>
    <?php echo "\n"; ?>
