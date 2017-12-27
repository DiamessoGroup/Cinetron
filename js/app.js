var app = angular.module('myApp', []);
app.controller('myCtrl', function ($scope, $http, $sce) {

  function getRandomIntInclusive(min, max) {
    /* Get Random Number between min and max */
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }

  let randomPage = getRandomIntInclusive(1, 5);

  /* Get Movie Detail */
  function getMovieDetail(trailerKey) {
    $http({
      method: "GET",
      url: `http://api.themoviedb.org/3/movie/${trailerKey}?api_key=a862696eab5e9103df57baedbe9d56a9&append_to_response=videos`
    }).then(function mySuccess(response) {
      $scope.trailerDetail = response.data;
      /* console.log($scope.trailerDetail); */
      $scope.trailerDetailTitle = $scope.trailerDetail.title;
      $scope.trailerDetailRuntime = $scope.trailerDetail.runtime;
      $scope.trailerDetailReleaseYear = $scope.trailerDetail.release_date.substr(0, 4);
      for (i = 0; i < $scope.trailerDetail.videos.results.length; i += 1) {
        if ($scope.trailerDetail.videos.results[i].type == 'Trailer' && $scope.trailerDetail.videos.results[i].site == 'YouTube') {
          $scope.youtubeLinkPartial = `https://www.youtube.com/watch?v=${$scope.trailerDetail.videos.results[i].key}`;
          $scope.youtubeLinkFull = $sce.trustAsResourceUrl(`https://www.youtube.com/embed/${$scope.trailerDetail.videos.results[i].key}?rel=0&amp;controls=0&amp;hd=1&amp;iv_load_policy=3&amp;showinfo=0`);
          break;
        }
      }
    }, function myError(response) {
      $scope.discoverMovie = response.statusText;
    });
  }
  /* Movie Detail Ends */

  function getMovieList(randomPage) {
    /* Get Movie List Function */
    $http({
      method: "GET",
      url: `https://api.themoviedb.org/3/discover/movie?api_key=a862696eab5e9103df57baedbe9d56a9&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=true&page=${randomPage}&vote_count.gte=10&vote_average.gte=7&with_genres=28`
    }).then(function mySuccess(response) {
      $scope.discoverMovie = response.data;
      console.log($scope.discoverMovie);
      console.log($scope.discoverMovie.results[0].id);
      var i = 0;
      trailerKey = $scope.discoverMovie.results[i].id;
      getMovieDetail(trailerKey);
    }, function myError(response) {
      $scope.discoverMovie = response.statusText;
    }); /* Get Movie List End */
  }

  /* function getNextPage() {
    randomPage = getRandomIntInclusive(1, 5);
    i = getRandomIntInclusive(0, $scope.discoverMovie.results.length - 1);
    getMovieList(randomPage);
    console.log(i);
  } */

  /* Get Movie List */
  $http({
    method: "GET",
    url: `https://api.themoviedb.org/3/discover/movie?api_key=a862696eab5e9103df57baedbe9d56a9&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=true&page=${randomPage}&vote_count.gte=10&vote_average.gte=7&with_genres=28`
  }).then(function mySuccess(response) {
    $scope.discoverMovie = response.data;
    /* console.log($scope.discoverMovie);
    console.log($scope.discoverMovie.results[0].id); */
    var i = getRandomIntInclusive(1, $scope.discoverMovie.results.length - 1);
    trailerKey = $scope.discoverMovie.results[i].id;
    getMovieDetail(trailerKey);

    $scope.nextMovie = function () {
      /* Get Movie to Next Movie Function */
      i = i + 1;
      if (i == $scope.discoverMovie.results.length) {
        randomPage = getRandomIntInclusive(1, 5);
        i = getRandomIntInclusive(1, $scope.discoverMovie.results.length - 1);
        getMovieList(randomPage);
      }
      trailerKey = $scope.discoverMovie.results[i].id;
      getMovieDetail(trailerKey);
    };

    $scope.previousMovie = function () {
      /* Get Movie to Next Movie Function */
      i = i - 1;
      if (i < 0) {
        randomPage = getRandomIntInclusive(1, 5);
        i = getRandomIntInclusive(0, $scope.discoverMovie.results.length - 1);
        getMovieList(randomPage);
      }
      trailerKey = $scope.discoverMovie.results[i].id;
      getMovieDetail(trailerKey);
    };
  }, function myError(response) {
    $scope.discoverMovie = response.statusText;
  });
  /* Movie List End */
});

/*{
    "genres": [
      {
        "id": 28,
        "name": "Action"
      },
      {
        "id": 12,
        "name": "Adventure"
      },
      {
        "id": 16,
        "name": "Animation"
      },
      {
        "id": 35,
        "name": "Comedy"
      },
      {
        "id": 80,
        "name": "Crime"
      },
      {
        "id": 99,
        "name": "Documentary"
      },
      {
        "id": 18,
        "name": "Drama"
      },
      {
        "id": 10751,
        "name": "Family"
      },
      {
        "id": 14,
        "name": "Fantasy"
      },
      {
        "id": 36,
        "name": "History"
      },
      {
        "id": 27,
        "name": "Horror"
      },
      {
        "id": 10402,
        "name": "Music"
      },
      {
        "id": 9648,
        "name": "Mystery"
      },
      {
        "id": 10749,
        "name": "Romance"
      },
      {
        "id": 878,
        "name": "Science Fiction"
      },
      {
        "id": 10770,
        "name": "TV Movie"
      },
      {
        "id": 53,
        "name": "Thriller"
      },
      {
        "id": 10752,
        "name": "War"
      },
      {
        "id": 37,
        "name": "Western"
      }
    ]
}*/