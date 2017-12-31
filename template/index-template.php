
    <?php include "../navigation.php"?>
    <div class="container-fluid text-center" id="title">
        <h1 class="w3-center">CINETRON</h1>
    </div>
    <!-- <form action="" method="post" class="container-fluid w3-center">

        <div id="searchField" class="form-inline">
            <select name="genre" class="form-control input-lg">
                <option selected>Genre</option>
                <option value="2018">Action</option>
                <option value="2017">Comedy</option>
                <option value="2016">Drama</option>
            </select> -->

            <!-- <input type="text" placeholder="Genre" class="form-control input-lg"> -->

            <!-- <input type="text" placeholder="Keyword" class="form-control input-lg"> -->
        <!-- </div>

        <div id="searchButton">
            <button type="submit" class="">Search</button>
        </div>
    </form> -->

    <div class="w3-container">
        <div class="w3-panel w3-card-4 w3-padding" id="mainContent">
            <h2>CINETRON</h2>
            <p>Cinetron helps you find random movies you could watch tonight.</p>
            <p>Select a category below, and you will be able to preview trailers of top rated movies.</p>
            <p>Start discovering new movies or reminiscing on old ones.</p>
        </div>
    </div>

    <div class="w3-container black">
        <div class="w3-row">
            <div class="w3-col s12 m6">
                <a href="#!trailer" ng-click="getMovieCategory(28)"><div class="w3-card-4 card">
                    <img src="./img/genres/Action.jpg" alt="Action" class="image">
                    <div class="overlay">
                        <div class="text">Action</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6">
                <a href="#!trailer" ng-click="getMovieCategory(12)"><div class="w3-card-4 card">
                    <img src="./img/genres/Adventure.jpg" alt="Adventure" class="image">
                    <div class="overlay">
                        <div class="text">Adventure</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6">
                <a href="#!trailer" ng-click="getMovieCategory(35)"><div class="w3-card-4 card">
                    <img src="./img/genres/Comedy.jpg" alt="Comedy" class="image">
                    <div class="overlay">
                        <div class="text">Comedy</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6">
                <a href="#!trailer" ng-click="getMovieCategory(18)"><div class="w3-card-4 card">
                    <img src="./img/genres/Drama.jpg" alt="Drama" class="image">
                    <div class="overlay">
                        <div class="text">Drama</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6">
                <a href="#!trailer" ng-click="getMovieCategory(10402)"><div class="w3-card-4 card">
                    <img src="./img/genres/Music.jpg" alt="Music" class="image">
                    <div class="overlay">
                        <div class="text">Music</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6">
                <a href="#!trailer" ng-click="getMovieCategory(10752)"><div class="w3-card-4 card">
                    <img src="./img/genres/War.jpg" alt="War" class="image">
                    <div class="overlay">
                        <div class="text">War</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6">
                <a href="#!trailer" ng-click="getMovieCategory(27)"><div class="w3-card-4 card">
                    <img src="./img/genres/Horror.jpg" alt="Horror" class="image">
                    <div class="overlay">
                        <div class="text">Horror</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6">
                <a href="#!trailer" ng-click="getMovieCategory(10749)"><div class="w3-card-4 card">
                    <img src="./img/genres/Romance.jpg" alt="Romance" class="image">
                    <div class="overlay">
                        <div class="text">Romance</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6">
                <a href="#!trailer" ng-click="getMovieCategory(878)"><div class="w3-card-4 card">
                    <img src="./img/genres/Scifi.jpg" alt="Scifi" class="image">
                    <div class="overlay">
                        <div class="text">Science Fiction</div>
                    </div>
                </div></a>
            </div>
            <div class="w3-col s12 m6">
                <a href="#!trailer" ng-click="getMovieCategory(10751)"><div class="w3-card-4 card">
                    <img src="./img/genres/Family.jpg" alt="Family" class="image">
                    <div class="overlay">
                        <div class="text">Family</div>
                    </div>
                </div></a>
            </div>

        </div>

    </div>
    <div id="tmdb">
        <div class="w3-container">
            <p><a href="https://www.themoviedb.org" target="_blank"><span><img src="logo/TMDB.png" style="width:3%"></span></a> Powered by The Movie Database.</p>
        </div>
    </div>