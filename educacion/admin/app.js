function getParameterByName(name) {
  name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
  var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
  results = regex.exec(location.search);
  return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var leerror = getParameterByName('leerror');
var lcerror = getParameterByName('lcerror');
var reerror = getParameterByName('reerror');
var rcerror = getParameterByName('rcerror');

const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

if(leerror == 1){
  alert("Correo y/o contraseña incorrectos")
}

if(lcerror == 1){
  alert("Correo y/o contraseña incorrectos")
}

if (reerror == 1){
  alert("El correo que ingresaste ya se encuentra registrado en la plataforma")
  container.classList.add("sign-up-mode");
  var name = getParameterByName('name');
  document.getElementById('name').value = name;
  var rol = getParameterByName('rol');
  if(rol == 1){
    document.getElementById('r1').checked = true;
  }else{
    document.getElementById('r2').checked = true;
  }
}

if (rcerror == 1){
  alert("Las contraseñas no coinciden")
  container.classList.add("sign-up-mode");
  var name = getParameterByName('name');
  document.getElementById('name').value = name;
  var email = getParameterByName('email');
  document.getElementById('remail').value = email;
  var rol = getParameterByName('rol');
  if(rol == 1){
    document.getElementById('r1').checked = true;
  }else{
    document.getElementById('r2').checked = true;
  }
}