function erase(obj) {

    let codigo = obj.children[0].innerHTML;

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Estas seguro?',
        text: "No se podra revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, borralo!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {

            window.location = "index.php?ruta=erase&codigo=" + codigo

        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'No se ha borrado :)',
                'error'
            )
        }
    })




}

function edit(obj) {
    let nombre = obj.children[1].innerHTML;
    let apellido = obj.children[2].innerHTML;
    let usuario = obj.children[3].innerHTML;
    let clave = obj.children[4].innerHTML;
    let codigo = obj.children[0].innerHTML;

    document.getElementById("txtNombreM").value = nombre;
    document.getElementById("txtApellidoM").value = apellido;
    document.getElementById("txtUsuarioM").value = usuario;
    document.getElementById("txtClaveM").value = clave;
    document.getElementById("txtCodigoM").value = codigo;
}

function getGeneraReporte(e) {

    window.open('view/module/Ureport.php', '_blank');
    e.preventDefault();

}