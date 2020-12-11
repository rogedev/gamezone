(function () {
  'use strict'

  window.addEventListener('load', function () {
    //recibimos en nombre de la clase del formulario a validar
    var forms = document.getElementsByClassName('needs-validation')

    // cramos un loop para prevenir el envio de datos vacios o invalidas
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  }, false)
})()