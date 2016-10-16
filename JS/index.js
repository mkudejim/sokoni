(function() {
    var height = (window.innerHeight).toString() + "px";
    var h = document.getElementById("cont");
    h.style.height = height;
})();


function setDivHeightToWndwSize(id){
    var height = (window.innerHeight).toString() + "px";
    var h = document.getElementById(id);
    h.style.height = height;
}