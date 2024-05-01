window.addEventListener("load", function () {
    const opacity = setTimeout(opacityLayer, 1000);
    function opacityLayer() {
        document.querySelector("#load_layer").classList.toggle("layer_opacity");
    }

    const myTimeout = setTimeout(removeLayer, 120000);
    function removeLayer() {
        document.querySelector("#load_layer").remove();
    }
});
