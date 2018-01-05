
    <br>
    <div class="container-fluid flex" id="videoContent">
        <a href ng-click="previousMovie()"><i class="fa fa-chevron-circle-left arrow"></i></a>
        <div class="videoWrapper">
            <iframe width="1100" height="618.75" ng-src="{{youtubeLinkFull}}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            <!-- <h2>Black Panther</h2>
            <div id="contentDetail">
                <i class="fa fa-heart"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-tag"></i>
            </div> -->
        </div>
        <a href ng-click="nextMovie()"><i class="fa fa-chevron-circle-right arrow"></i></a>
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
                    <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a>
                </div>
            </div>
        </div>
    </footer>
