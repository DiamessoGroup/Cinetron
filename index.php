<!DOCTYPE html>
<html lang="en" ng-app="myApp" ng-controller="myCtrl" ng-cloak>

<head>
    <?php include "./meta_head.php"?>

<body ng-class="{bodyIndex: location === '/', bodyTrailer: location === '/trailer'}">
    <div ng-view></div>

    <?php include "./meta_footer.php"?>
</body>

</html>