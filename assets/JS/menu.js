const DOM_body = document.body;
const DOM_navbar = document.querySelector("nav");
const hamburger_btn = document.querySelector("button.menu");
const nav_layer = document.querySelector(".nav_layer");

function toggleMenu() {
    DOM_navbar.classList.toggle("menu_open");
    DOM_body.classList.toggle("body_minus");
}

hamburger_btn.addEventListener("click", toggleMenu);
nav_layer.addEventListener("click", toggleMenu);

// ######## Cambiar Tema ##########
// Obtener el tema del sistema
var tema = window.matchMedia("(prefers-color-scheme: dark)");

// Obtener los elementos del DOM
var them_switch = document.querySelector(".switch");
var switch_btn = document.querySelector(".switch_btn");
var switch_title = document.querySelector(".switch_title");
var switch_text = document.querySelector("#switch_text");

function cambiarTema() {
    // Usar el tema elegido por el switch
    if (them_switch.classList.contains("active")) {
        // Tema oscuro
        localStorage.setItem("theme", "dark");
        localStorage.setItem("switch", "active");
        DOM_body.classList.add("dark-theme");
        DOM_body.classList.remove("light-theme");
        switch_text.innerText = "Oscuro";
    } else {
        // Tema claro
        localStorage.setItem("theme", "light");
        localStorage.setItem("switch", "");
        DOM_body.classList.add("light-theme");
        DOM_body.classList.remove("dark-theme");
        switch_text.innerText = "Claro";
    }
}

switch_btn.addEventListener("click", () => {
    // Cambiar el estado del switch
    them_switch.classList.toggle("active");
    // Llamar a la función cambiarTema
    cambiarTema();
});

// Se ejecuta siempre que se cambia el tema
tema.addEventListener("change", cambiarTema);

// Al cargar la página, obtener el tema y el estado del checkbox guardados
var temaGuardado = localStorage.getItem("theme");

// Si hay un tema guardado, aplicarlo al body
if (temaGuardado === "light") {
    DOM_body.classList.add("light-theme");
    DOM_body.classList.remove("dark-theme");
    them_switch.classList.remove("active");
} else {
    DOM_body.classList.add("dark-theme");
    DOM_body.classList.remove("light-theme");
    them_switch.classList.add("active");
}
