function erase(obj) {

    let id = obj.children[0].innerHTML;

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

            window.location = "index.php?route=erase&id=" + id

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

function getData(obj) {
    let name = obj.children[1].innerHTML;
    let email = obj.children[2].innerHTML;
    let user = obj.children[3].innerHTML;
    let password = obj.children[4].innerHTML;
    let id = obj.children[0].innerHTML;

    document.getElementById("txtNameM").value = name;
    document.getElementById("txtEmailM").value = email;
    document.getElementById("txtUserM").value = user;
    document.getElementById("txtPasswordM").value = password;
    document.getElementById("txtIdM").value = id;
}

function edit(obj) {
    let name = obj.children[1].innerHTML;
    let email = obj.children[2].innerHTML;
    let user = obj.children[3].innerHTML;
    let password = obj.children[4].innerHTML;
    let id = obj.children[0].innerHTML;

    document.getElementById("txtNameM").value = name;
    document.getElementById("txtEmailM").value = email;
    document.getElementById("txtUserM").value = user;
    document.getElementById("txtPasswordM").value = password;
    document.getElementById("txtIdM").value = id;
}

function genReport(e) {

    window.open('view/module/dashboard/uReport.php');
    e.preventDefault();

}