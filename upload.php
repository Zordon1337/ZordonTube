<!doctype html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="assets/vendor/jquery.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>
    <script src="assets/vendor/mediaelement-and-player.min.js"></script>
    <script src="assets/vendor/core.js"></script>
    <script src="assets/vendor/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/mediaelementplayer.min.css">
    <title>Theatre - LocalTube</title>
    <style>
        a:focus{
            outline: none !important;
        }
    </style>
</head>
<body style="background-color: black;">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="home">ZordonTube</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="videos.php">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="upload.php">Upload</a>
            </li>
        </ul>
    </div>
</nav>
<form action="uploadprocess.php" method='post' enctype="multipart/form-data">
<input style="color: white;" type="file" name="file"/><br><br>
	<input class="btn btn-outline-secondary" type="submit" value="Upload"/>
</form>
</form>

</body>
</html>
