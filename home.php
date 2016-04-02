<head>

    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="home.js"></script>

    <?php include("print-functions.php"); ?>

</head>

<body>

    THIS IS THE HOME PAGE

    <?php
        // loop through db table containing timelines
        // grab id and pass to print
        printTimelineCard(3);
    ?>

</body>
