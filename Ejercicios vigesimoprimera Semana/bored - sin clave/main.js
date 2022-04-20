function main() {
    var settings = {
        "async": true,
        "type": "GET",
        "url": "http://www.boredapi.com/api/activity/",
    };
    console.log(settings)

    $.ajax(settings).done(function (response) {
        if (settings.async == true) {
            document.getElementById("actividad").innerHTML = response.activity;
            document.getElementById("accesibilidad").innerHTML = response.accessibility;
            document.getElementById("tipo").innerHTML = response.type;
            document.getElementById("participantes").innerHTML = response.participants;
            document.getElementById("precio").innerHTML = response.price;
            document.getElementById("enlace").innerHTML = response.link;
            document.getElementById("llave").innerHTML = response.key;
            console.log(response)
        }
    });
}
main()