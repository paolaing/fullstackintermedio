function mensaje() {
    alert('DEBE REGISTRARSE, GRACIAS');
}

var escogerdivisa = document.getElementById("moneda_escoger");
escogerdivisa.addEventListener("change", function () {
    convertirdinero();
    
});


var divisacomprar = document.getElementById("divisacomprar");
divisacomprar.addEventListener("input", function () {
    convertirdinero();

});

function convertirdinero() {

  

    var x = document.getElementById("moneda_escoger").value;
    console.log(x)

    if (document.getElementById("moneda_escoger").value == "1") {
        var valordolar = 4350;
        if (document.getElementById("divisacomprar")) {
            // renamed x to z
            var z = document.getElementById("divisacomprar").value;
            var pagototal = valordolar * z;
                        // not .value but .textContent
            document.getElementById("costo").value = pagototal;
            console.log("costo")
                    }
    }
            else {
                var valoreuro = 4560;
                if (document.getElementById("divisacomprar")) {
                var z = document.getElementById("divisacomprar").value;
                var wc = valoreuro * z;


                // not .value but .textContent

                document.getElementById("costo").value = wc;
        }
    }
}