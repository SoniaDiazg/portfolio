//=====================
// variables
//=====================


//=====================
// funciones
//=====================

// Ventana modal
var modal = document.getElementById("ventanaModal");
// Botón que abre el modal
var boton = document.getElementById("abrirModal");
// Hace referencia al elemento <span> que tiene la X que cierra la ventana
var span = document.getElementsByClassName("cerrar")[0];

// Cuando el usuario hace clic en el botón, se abre la ventana
function openModal(headerText, imgUrl, imgAlt) {
    document.querySelector(".headerModal h4").innerHTML = headerText;
    document.querySelector(".contenido-modal img").setAttribute("src", imgUrl);
    document.querySelector(".contenido-modal img").setAttribute("alt", imgAlt);
    modal.style.display = "block";
};
// boton.addEventListener("click",function() {
//     modal.style.display = "block";
//   });
  // Si el usuario hace clic en la x, la ventana se cierra
  span.addEventListener("click",function() {
    modal.style.display = "none";
  });
  // Si el usuario hace clic fuera de la ventana, se cierra.
  window.addEventListener("click",function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });





// /////// Abrir modal //////
// const openEls = document.querySelectorAll("[data-open]");
// const isVisible = "is-visible";

// for (const el of openEls) {
//     el.addEventListener("click", function() {
//         const modalId = this.dataset.open;
//         document.getElementById(modalId).classList.add(isVisible);
//     });
// }

/////// Cerrar modal //////
// const closeEls = document.querySelectorAll("data-close");

// for (const el of closeEls) {
//     el.addEventListener("click", function() {
//         this.parentElement.parentElement.parentElement.classList.remove(isVisible);
//     });
// }

// /////// Cerrar modal haciendo click fuera del modal//////
// document.addEventListener("click", e => {
//     if(e.target == document.querySelector(".modal.is-visible")) {
//         document.querySelector(".modal.is-visible").classList.remove(isVisible);
//     }
// });

// /////// Cerrar modal pulsando la tecla esc//////
// document.addEventListener("keyup", e => {
//     if(e.key == "Escape" && document.querySelector(".modal.is-visible")) {
//         document.querySelector("modal.is-visible").classList.remove(isVisible);
//     }
// });