$("#btn_search").click(function (e) {
    e.preventDefault();
    let num_docu = document.querySelector("#num_docu");
    let btn_search = document.querySelector("#btn_search");
    let names = document.querySelector("#names");
    let lastnames = document.querySelector("#lastnames");
    if (num_docu.value.trim().length == 0) {
        alert("RELLENE CORRECTAMENTE EL CAMPO")
    } else {
        $.ajax({
            type: "post",
            url: "./api.php",
            data: {
                num_docu: num_docu.value
            },
            beforeSend: (e) => {
                btn_search.setAttribute("readonly", true)
            },
            success: function (response) {
                let data = JSON.parse(response)
                if (data) {
                    names.value = data.nombres
                    lastnames.value = data.apellidoPaterno + " " + data.apellidoMaterno
                } else {
                    names.value = ""
                    lastnames.value = ""
                    alert("EL NRO. DNI NO SE ENCUENTRA REGISTRADO EN LA RENIEC")
                }
            }, complete: (e) => {
                btn_search.setAttribute("readonly", false)
            }
        });
    }
});