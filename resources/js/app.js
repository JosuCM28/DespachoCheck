import "./bootstrap";
import './../../vendor/power-components/livewire-powergrid/dist/powergrid';
import './../../vendor/power-components/livewire-powergrid/dist/tailwind.css';
import flatpickr from "flatpickr"; 
import "flyonui/flyonui";


// Función para alternar la visibilidad del drawer
document.getElementById("barra-show").addEventListener("click", function () {
    const drawer = document.getElementById("drawer-navigation");
    drawer.classList.toggle("-translate-x-full");
});
document.getElementById("barra-close").addEventListener("click", function () {
    const drawer = document.getElementById("drawer-navigation");
    drawer.classList.toggle("-translate-x-full");
});
/*const dropdownButton = document.getElementById("dropdownDefaultButton");
const dropdownMenu = document.getElementById("dropdown");
dropdownButton.addEventListener("click", function () {
    dropdownMenu.classList.toggle("hidden");
}); */





