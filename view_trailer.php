<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./meta_head.php"?>
    <title>Cinetron - View Trailer</title>
</head>

<body class="bodyTrailer" ng-app="myApp" ng-controller="myCtrl" ng-cloak>
    <!-- <?php include "navigation.php"?> -->
    <br>
    <div class="container-fluid flex" id="videoContent">
        <a href="#" ng-click="previousMovie()"><i class="fa fa-chevron-circle-left arrow"></i></a>
        <div class="intrinsic-container intrinsic-container-4x3">
            <iframe ng-src="{{youtubeLinkFull}}" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            <iframe src="https://youtu.be/YQHsXMglC9A" allowfullscreen></iframe>
            <!-- <h2>Black Panther</h2>
            <div id="contentDetail">
                <i class="fa fa-heart"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-tag"></i>
            </div> -->
        </div>
        <a href="#" ng-click="nextMovie()"><i class="fa fa-chevron-circle-right arrow"></i></a>
        <div class="intrinsic-container intrinsic-container-4x3">
            <iframe src="https://youtu.be/YQHsXMglC9A" allowfullscreen></iframe>
        </div>
    </div>
    <footer>
        <div class="w3-bar w3-bottom" id="footerTrailer">
        <div class="w3-row">
            <div class="w3-col s2 m1">
                <a href="#" class="w3-left w3-bar-item"><img src="./logo/Logo_Cinetron_1.png" style="width: 25px"></a>
            </div>
            <div class="w3-col s8 m10" id="footerTrailerContent">
                <p>{{trailerDetailTitle}} <span class="w3-hide-small w3-right"><small>Run Time: <span class="movieSmallDetails">{{trailerDetailRuntime}} min</span></small> - <small>Release Year: <span class="movieSmallDetails">{{trailerDetailReleaseYear}}</span></small></span></p>
            </div>
            <div class="w3-col s2 m1">
                <div class="w3-right">
                    <a href="./index.php" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <?php include "./meta_footer.php"?>
</body>

</html>