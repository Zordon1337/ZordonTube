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
<body>
<form action="uploadprocess.php" method="post" enctype="multipart/form-data">
  Select video to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>
