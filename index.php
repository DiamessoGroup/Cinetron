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

    <div class="w3-container black">
        <div class="w3-row">
            <div class="w3-col s12 m6 l4">
                <a href ng-click="getMovieCategory(28)"><div class="w3-card-4 card">
                    <img src="./img/genres/Action.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Action</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6 l4">
                <a href="#"><div class="w3-card-4 card">
                    <img src="./img/genres/Adventure.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Adventure</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6 l4">
                <a href="#"><div class="w3-card-4 card">
                    <img src="./img/genres/Comedy.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Comedy</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6 l4">
                <a href="#"><div class="w3-card-4 card">
                    <img src="./img/genres/Drama.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Drama</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6 l4">
                <a href="#"><div class="w3-card-4 card">
                    <img src="./img/genres/Music.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Music</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6 l4">
                <a href="#"><div class="w3-card-4 card">
                    <img src="./img/genres/Horror.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Horror</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6 l4">
                <a href="#"><div class="w3-card-4 card">
                    <img src="./img/genres/Romance.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Romance</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6 l4">
                <a href="#"><div class="w3-card-4 card">
                    <img src="./img/genres/Scifi.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Science Fiction</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6 l4">
                <a href="#"><div class="w3-card-4 card">
                    <img src="./img/genres/Family.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">Family</div>
                    </div>
                </div></a>
            </div>
            
        </div>
        
    </div>
    

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