app.directive('headerDirective', function () {
    return {
        replace: false,
        templateUrl: "directives/header.html",
        controller: ['$scope', '$filter', function ($scope, $filter) {
            // Your behaviour goes here :)
        }]
    }
});

app.directive('footerDirective', function () {
    return {
        replace: false,
        templateUrl: "directives/footer.html",
        controller: ['$scope', '$filter', function ($scope, $filter) {
            // Your behaviour goes here :)
        }]
    }
});

app.directive('sidebarDirective', function () {
    return {
        replace: false,
        templateUrl: "directives/sidebar.html",
        controller: ['$scope', '$filter', function ($scope, $filter) {
            // Your behaviour goes here :)
        }]
    }
});