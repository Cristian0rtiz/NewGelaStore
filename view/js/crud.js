function createP(e) {
    e.preventDefault();
    formulario = document.getElementById('dragToUploadForm');
    img = document.getElementById('inputFile');
    nombre = document.getElementById('name');
    code = document.getElementById('code');
    price = document.getElementById('price');


    lVali = true;

    if (img.value == "") {
        img.style.borderColor = "red";
        ohSnap('Ingresa la imagen...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingresar el nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (code.value == "") {
        code.style.borderColor = "red";
        ohSnap('Ingresar el codigo...', { color: 'red' }, { duration: 1000 }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (price.value == "") {
        price.style.borderColor = "red";
        ohSnap('Ingresar el precio...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true) {
        formulario.submit();
    }
}
//  borrar el contenido del formulario productos
function ClearForm() {
    document.getElementById("dragToUploadForm").reset();
}

//erase product
function eraseP(obj) {

    let id = obj.children[0].innerHTML;
    console.log(id)
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
            let id = obj.children[0].innerHTML;
            window.location = "index.php?route=erasep&id="+id
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

//Erase User
function erase(obj) {

    let id = obj.children[0].innerHTML;
    console.log(id)
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
            let id = obj.children[0].innerHTML;
            window.location = "index.php?route=erase&id="+id
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

function validateMU(e){
    e.preventDefault();
    formulario = document.getElementById('frmUserModify');
    nombre = document.getElementById('txtNameM');
    email = document.getElementById('txtEmailM');
    usuario = document.getElementById('txtUserM');
    contraseña = document.getElementById('txtPasswordM');
    
    lVali = true;
    
    if (nombre.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (email.value==""){
        email.style.borderColor="red";
        ohSnap('Ingresar el correo...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (usuario.value==""){
        usuario.style.borderColor="red";
        ohSnap('Ingresar el usuario...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (contraseña.value==""){
        contraseña.style.borderColor="red";
        ohSnap('Ingresar la contraseña...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true){
        formulario.submit();
    }
    

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

// function editP(obj) {
//     let name = obj.children[1].innerHTML;
//     let email = obj.children[2].innerHTML;
//     let user = obj.children[3].innerHTML;
//     let password = obj.children[4].innerHTML;
//     let id = obj.children[0].innerHTML;

//     document.getElementById("txtNameM").value = name;
//     document.getElementById("txtEmailM").value = email;
//     document.getElementById("txtUserM").value = user;
//     document.getElementById("txtPasswordM").value = password;
//     document.getElementById("txtIdM").value = id;
// }

function genReportU(e) {

    window.open('view/module/dashboard/uReport.php');
    e.preventDefault();

}

function genReportO(e) {

    window.open('view/module/dashboard/oReport.php');
    e.preventDefault();

}

function genReportP(e) {

    window.open('view/module/dashboard/pReport.php');
    e.preventDefault();

}