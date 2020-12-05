document.getElementById("sidebarCollapse").onclick = function() {
    var sidebarLeft = document.getElementById("sidebar");
    var content = document.getElementById("content");

    sidebarLeft.classList.toggle("active");
    content.classList.toggle("active");
};