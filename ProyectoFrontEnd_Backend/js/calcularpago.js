function mensaje() {
    alert('DEBE REGISTRARSE, GRACIAS');
}

function myFunction() {
    var x = document.getElementById("moneda_escoger").value;
    console.log(x)

    if (document.getElementById("moneda_escoger").value == "1") {
        var w = 4567;
        if (document.getElementById("divisacomprar")) {
            // renamed x to z
            var z = document.getElementById("divisacomprar").value;
            var wc = w * z;


            // not .value but .textContent

            document.getElementById("costo").value = wc;


        }
    }

        else {
                var w = 500;
                if (document.getElementById("divisacomprar")) {
                var z = document.getElementById("divisacomprar").value;
                var wc = w * z;


                // not .value but .textContent

                document.getElementById("costo").value = wc;
        }
    }
}