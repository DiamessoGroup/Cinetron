<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./meta_head.php" ?>
    <title>Cinetron</title>
</head>

<body class="bodyIndex" ng-app="myApp" ng-controller="myCtrl" ng-cloak>
    <?php include "navigation.php" ?>
    <div class="container-fluid text-center" id="title">
        <h1 class="w3-center">CINETRON</h1>
    </div>
    <form action="" method="post" class="container-fluid w3-center">

        <div id="searchField" class="form-inline">
            <select name="genre" class="form-control input-lg">
                <option selected>Genre</option>
                <option value="2018">Action</option>
                <option value="2017">Comedy</option>
                <option value="2016">Drama</option>
            </select>

            <!-- <input type="text" placeholder="Genre" class="form-control input-lg"> -->

            <!-- <input type="text" placeholder="Keyword" class="form-control input-lg"> -->
        </div>

        <div id="searchButton">
            <button type="submit" class="">Search</button>
        </div>
    </form>

    <div class="w3-container">
        <div class="w3-panel w3-card-4 w3-padding" id="mainContent">
            <h2>CINETRON</h2>
            <p>Cinetron helps you find random movies you could watch tonight.</p>
            <p>Select a year, a genre or enter a keyword.</p>
            <p>Press search and you will be able to preview trailers of top rated movies.</p>
            <p>Start discovering new movies or reminiscing on old ones.</p>
        </div>
    </div>
    <?php include "./meta_footer.php" ?>
</body>

</html>