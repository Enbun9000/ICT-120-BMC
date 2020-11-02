document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("cmdPeople").addEventListener("click", function() {
        transports.classList.add('hidden')
        housing.classList.add('hidden')
        activities.classList.add('hidden')
        if(people.classList.contains('hidden')) {
            people.classList.remove('hidden')
        }
    });

    document.getElementById("cmdTransports").addEventListener("click", function() {
        people.classList.add('hidden')
        housing.classList.add('hidden')
        activities.classList.add('hidden')
        if(transports.classList.contains('hidden')) {
            transports.classList.remove('hidden')
        }
    });

    document.getElementById("cmdHousing").addEventListener("click", function() {
        people.classList.add('hidden')
        transports.classList.add('hidden')
        activities.classList.add('hidden')
        if(housing.classList.contains('hidden')) {
            housing.classList.remove('hidden')
        }
    });

    document.getElementById("cmdActivities").addEventListener("click", function() {
        people.classList.add('hidden');
        transports.classList.add('hidden');
        housing.classList.add('hidden');
        if(activities.classList.contains('hidden')) {
            activities.classList.remove('hidden')
        }
    });

    document.getElementById("txtHotelData00").addEventListener("blur", function () {
        switch (txtHotelData00.value) {
            case "Alpha":
            case "alpha":
                imgHotel.src = 'img/hotels/hotel-alpha.jpg';
                break;
            case "Beta":
            case "beta":
                imgHotel.src = 'img/hotels/hotel-beta.jpg';
                break;
            case "Gamma":
            case "gamma":
                imgHotel.src = 'img/hotels/hotel-gamma.jpg';
                break;
            case "Delta":
            case "delta":
                imgHotel.src = 'img/hotels/hotel-delta.jpg';
                break;
            default:
                imgHotel.src = 'img/hotels/hotel-none.png';
                break;
        }

    });

    document.getElementById("txtHotelData02").addEventListener("blur", function () {
        for(var i = 0;i<npa.length; i++) {
            if (parseInt(txtHotelData02.value) === npa[i]) txtHotelData03.value = villes[i];

        }
    })
});

