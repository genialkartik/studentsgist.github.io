    angular.module("nglike",[]).controller("nglikectrl",function($scope){
      var x;
      var templatelist = [
        { adids = "<?php $row['adid'] ?>", liked: 0 }
      ];
      $scope.templatelist = templatelist;

              $scope.yooilikedit = function (passedid) {
                  passedid.liked++;
                  alert("liked");
              };
    });
