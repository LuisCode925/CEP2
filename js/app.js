function showIndex() { 
    $('#titulo').typeIt();
    setTimeout( () => { 
        $('#frases').typeIt({
            strings: [
                "Disfruta tu viaje con diversión", 
                "Explora tu sueño",
                "Convertirse en un viajero que el de turista",
                "Un recorrido memorable",
                "No olvidaras este viaje",
                "Descubre y explora",
                "Nuestro viaje es más de lo que esperas",
                "Viajar es vida",
                "Me encanta viajar",
                "La vida es un viaje",
                "Es hora de explorar",
                "Reserve su aventura",
                "Viaje sano y salvo",
                "Nuevas formas de explorar",
                "El mundo te espera",
                "Un viaje de lujo",
                "En todo el mundo, de clase mundial",
                "Exploremos la aventura",
                "Viaje sano y salvo",
                "Nos extrañarás"
            ],
            speed: 50,
            breakLines: false
        });
    },8000);     
}

showIndex();