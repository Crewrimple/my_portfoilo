function initMap() {
    // Широта и долгота Ташкента
    var myLatLng = {lat: 41.2995, lng: 69.2401};

    var map = new google.maps.Map(document.getElementById('google-maps'), {
        zoom: 10, // Можете настроить уровень приближения по вашему усмотрению
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Ташкент, Узбекистан' // Название локации
    });
}
