var color = null;

function alternateBackgroundColor() {
    var header = document.getElementById("header");

    if (color === "transparent" || color === null) {
        header.style.zIndex = 2;
        header.style.backgroundColor = "#282828";
        color = "black";
    } else {
        header.style.zIndex = 0;
        header.style.backgroundColor = "transparent";
        color = "transparent";
    }
}

function makeBackgroundTransparent() {
    var header = document.getElementById("header");
    
    header.style.zIndex = 0;
    header.style.backgroundColor = "transparent";
}