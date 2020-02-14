map = new GMaps({
        position: "TOP_CENTER",
        el: '#map',
        lat: -6.1697011,
        lng: 106.819318,
        zoom: 13,
        zoomControl: true,
        zoomControlOpt: {
            style: 'SMALL',
            position: 'TOP_LEFT'
        },
        panControl: false,
        scrollwheel: false
    });
    // add address markers
    map.addMarker({
        lat: -6.1697011,
        lng: 106.819318,
        title: "Hayam Wuruk & Dyah Pitaloka's Wedding",
        icon: 'loc.png',
        infoWindow: {
            content: '<a href="https://www.google.co.id/maps/place/Jl.+Majapahit,+Kecamatan+Gambir,+Kota+Jakarta+Pusat,+Daerah+Khusus+Ibukota+Jakarta/@-6.1697011,106.819318,17z/data=!3m1!4b1!4m8!1m2!2m1!1sjl+majapahit!3m4!1s0x2e69f5d6e42e2211:0x4125c0f13e3a1ecf!8m2!3d-6.1697064!4d106.8215121?hl=id" target="_BLANK"><p>Majapahit</p></a>'
        }
    });