import {MarkerClusterer} from "@googlemaps/markerclusterer";

function mapInit() {

    let map;


    async function initMap() {
        const {Map, InfoWindow} = await google.maps.importLibrary("maps");
        const {AdvancedMarkerElement, PinElement} = await google.maps.importLibrary(
            "marker"
        );
        // Create an info window to share between markers.
        const infoWindow = new InfoWindow(
            {
                content: "",
                disableAutoPan: true,
            }
        );
        let lat = 1;
        let lng = 1;
        map = new Map(document.getElementById("map"), {
            zoom: 6,
            center: {lat: 52.37158024220037, lng: 18.78281612032176},
            mapId: "a55b4adaabc2b07a",
        });
        let markers = [];
        const input = document.getElementById("pac-input");
        // const searchBox = new google.maps.places.SearchBox(input);
        const options = {
            types: ['(regions)'],
            componentRestrictions: {country: "pl"} // 2-letters code
        };

        let searchBox = new google.maps.places.Autocomplete(input, options);
        const locationButton = document.querySelector(".map__search-localization");
        locationButton.addEventListener("click", () => {
            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                        };
                        searchPartners(pos.lat, pos.lng, Map, InfoWindow, AdvancedMarkerElement, PinElement);
                        infoWindow.setPosition(pos);
                        map.setCenter(pos);
                        map.setZoom(10);
                    },
                    () => {
                        handleLocationError(true, infoWindow, map.getCenter());
                    }
                );
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        });
        searchBox.addListener("place_changed", () => {
            const place = searchBox.getPlace();
            if (place.length == 0) {
                return;
            }

            // Clear out the old markers.
            markers.forEach((marker) => {
                marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            const bounds = new google.maps.LatLngBounds();

            if (!place.geometry || !place.geometry.location) {
                console.log("Returned place contains no geometry");
                return;
            }

            const icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25),
            };

            // Create a marker for each place.
            markers.push(
                new google.maps.Marker({
                    map,
                    icon,
                    title: place.name,
                    position: place.geometry.location,
                })
            );
            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
            lat = markers[0].position.lat();
            lng = markers[0].position.lng();
            console.log(lat, lng);
            searchPartners(lat, lng, Map, InfoWindow, AdvancedMarkerElement, PinElement, place);
            map.fitBounds(bounds);
        });
        const tourStops = [];
        window.PARTNERS.forEach((partner) => {
            tourStops.push({
                position: {
                    lat: parseFloat(partner.lat.replace(',', '.')),
                    lng: parseFloat(partner.lng.replace(',', '.'))
                },
                title: `
                                                         <div class="map__info">
                                                            <div class="map__info-title">
                                                                ${partner.company}
                                                            </div>
                                                            <div class="map__info-address">
                                                                ${partner.address}
                                                            </div>
                                                            <div class="map__info-btn" data-toggle-popup="punkt-partnerski" data-partner-email="${partner.email}" data-company-name="${partner.company}">
                                                                WYBIEZ PARTNERA
                                                            </div>
                                                        </div>
                                        `,
            });
        });

        function haversine_distance(mk1, mk2) {
            console.log(mk1, mk2);
            var R = 6371.0710;
            var rlat1 = mk1.geometry.location.lat() * (Math.PI / 180); // Convert degrees to radians
            var rlat2 = parseFloat(mk2.lat) * (Math.PI / 180); // Convert degrees to radians
            var difflat = rlat2 - rlat1; // Radian difference (latitudes)
            var difflon = (parseFloat(mk2.lng) - mk1.geometry.location.lng()) * (Math.PI / 180); // Radian difference (longitudes)

            var d = 2 * R * Math.asin(Math.sqrt(Math.sin(difflat / 2) * Math.sin(difflat / 2) + Math.cos(rlat1) * Math.cos(rlat2) * Math.sin(difflon / 2) * Math.sin(difflon / 2)));
            return d;
        }

        function searchPartners(lat = 0, lng = 0, Map = null, InfoWindow, AdvancedMarkerElement = null, PinElement = null, searchItem) {
            let partnersAfterSearch = [];
            window.PARTNERS.forEach((partner) => {
                let d = haversine_distance(searchItem, partner);
                if (d < 100) {
                    partnersAfterSearch.push(partner);
                }
            });
            let partnersHTML = document.querySelector('.map__search__partners');
            partnersHTML.innerHTML = '';
            let partnersNumber = 0;
            partnersNumber = partnersAfterSearch.length;
            document.querySelector('.map__search-results').innerHTML = 'Wynik: ' + partnersNumber;
            partnersAfterSearch.forEach(partner => {
                partnersHTML.innerHTML += `
                                             <div class="map__search__partner">
                                                <div class="map__search__partner-data">
                                                    <div class="map__search__partner-name">
                                                        ${partner.company}
                                                    </div>
                                                    <div class="map__search__partner-address">
                                                        ${partner.address}
                                                    </div>
                                                </div>
                                                <div class="map__search__partner-button" data-title='<div class="map__info">
                                                            <div class="map__info-title">
                                                                ${partner.company}
                                                            </div>
                                                            <div class="map__info-address">
                                                                ${partner.address}
                                                            </div>
                                                            <div class="map__info-hours">
                                                               <strong>Godziny otwarcia:</strong><br>
                                                                ${partner.hours}
                                                            </div>
                                                            <div class="map__info-btn" data-toggle-popup="punkt-partnerski" data-partner-email="${partner.email}">
                                                                WYBIEZ PARTNERA
                                                            </div>
                                                            </div>' data-lat="${partner.lat.replace(',', '.')}" data-lng="${partner.lng.replace(',', '.')}">
                                                    WYBIERZ
                                                </div>
                                            </div>
                                            `;
            });
            let buttons = document.querySelectorAll('.map__search__partner-button');
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    let lat = button.dataset.lat;
                    let lng = button.dataset.lng;
                    let position = {
                        lat: parseFloat(lat),
                        lng: parseFloat(lng),
                    };
                    let title = button.dataset.title;
                    map.setCenter({lat: parseFloat(lat), lng: parseFloat(lng)});
                    map.setZoom(15);
                    const pin = new PinElement({
                        glyph: ``,
                    });
                    const marker = new AdvancedMarkerElement({
                        position,
                        map,
                        title: `${title}`,
                        content: pin.element,
                    });
                    infoWindow.setContent(marker.title);
                    infoWindow.open(marker.map, marker);
                });
            });
        }


        // Create the markers.
        const markersCluster = tourStops.map(({position, title}, i) => {
            const pin = new PinElement({
                glyph: ``,
            });
            const marker = new AdvancedMarkerElement({
                position,
                map,
                title: `${title}`,
                content: pin.element,
            });
            let buttons = document.querySelectorAll('.map__search__partner-button');
            buttons.forEach(button => {
                button.dataset.lat = tourStops[i].position.lat;
                button.dataset.lng = tourStops[i].position.lng;
                button.addEventListener('click', () => {
                    let lat = button.dataset.lat;
                    let lng = button.dataset.lng;
                    let position = {
                        lat: parseFloat(lat),
                        lng: parseFloat(lng),
                    };
                    map.setCenter({lat: parseFloat(lat), lng: parseFloat(lng)});
                    map.setZoom(15);
                    infoWindow.setContent(marker.title);
                    infoWindow.open(marker.map, marker);
                });
            });

            // Add a click listener for each marker, and set up the info window.
            marker.addListener("click", ({domEvent, latLng}) => {
                const {target} = domEvent;

                infoWindow.close();
                infoWindow.setContent(marker.title);
                infoWindow.open(marker.map, marker);

            });
            return marker;

        });

        new MarkerClusterer({map: map, markers: markersCluster});


    }

    initMap();
}

export default {mapInit};
