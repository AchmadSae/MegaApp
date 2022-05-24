//dropdwon search to filter data
document.addEventListener('DOMContentLoaded', function() {
    var elem = document.querySelector(".dropdown-trigger");
    var instance = M.Dropdown.init(elem, {
        coverTriger : false,
        closeOnClick : true
    });
    });