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

    document.getElementById("txtHotelData00").addEventListener("focusout", function () {
        if (txtHotelData00.value === "Alpha" || txtHotelData00.value === "alpha") imgHotel.src = 'img/hotels/hotel-alpha.jpg';
        else if(txtHotelData00.value === "Beta" || txtHotelData00.value === "beta") imgHotel.src = 'img/hotels/hotel-beta.jpg';
        else if (txtHotelData00.value === "Gamma" || txtHotelData00.value === "gamma") imgHotel.src = 'img/hotels/hotel-gamma.jpg';
        else if(txtHotelData00.value === "Delta" || txtHotelData00.value === "delta") imgHotel.src = 'img/hotels/hotel-delta.jpg';
        else imgHotel.src = 'img/hotels/hotel-none.jpg';
    });

    document.getElementById("txtHotelData02").addEventListener("focusout", function () {
        for(var i = 0;i<npa.length; i++) {
            if (npa[i] === parseInt(txtHotelData02.value)) txtHotelData03.value = villes[i];
        }
    })
});

