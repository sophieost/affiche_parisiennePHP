// NAVBAR

const sidebar = document.getElementById("side-bar");
// const content = document.querySelector(".content");

btn.addEventListener("click", () => {
    sidebar.classList.toggle("active");
});

document.querySelector("main").addEventListener("click", () => {
    sidebar.classList.remove("active");
});
document.querySelector(".headBanner").addEventListener("click", () => {
    sidebar.classList.remove("active");
});

const navbar = document.querySelector('.nav-main');
// console.log(navbar);

window.addEventListener('scroll', () => {
    if (window.scrollY > 136) {
        navbar.classList.add('sticky');
        sidebar.style.position = "fixed";
        btn.style.top = "30px";
    } else {
        navbar.classList.remove('sticky');
        btn.style.top = "60px";
    }
});


// DRAG AND DROP
function dragStartHandler(ev) {
    console.log("dragStart");
    // Set the drag's format and data. Use the event target's id for the data
    ev.dataTransfer.setData("text/plain", ev.target.id);
    // Create an image and use it for the drag image
    // NOTE: change "example.gif" to an existing image or the image will not
    // be created and the default drag image will be used.

    // const img = new Image();
    // img.src = "example.gif";
    // ev.dataTransfer.setDragImage(img, 10, 10);
}


function dragOverHandler(ev) {
    console.log("dragOver");
    ev.preventDefault();
}

function dropHandler(ev) {
    console.log("Drop");
    ev.preventDefault();
    // Get the data, which is the id of the drop target
    const data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

