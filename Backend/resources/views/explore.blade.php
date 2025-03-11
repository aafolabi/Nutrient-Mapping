@extends('layouts.landing')
@section('content')



    <!-- Map Section Start -->
    <section>
        <div class="mt-8 w-5/6 mx-auto">
            <h1 class="text-4xl font-bold text-center text-[#002411]">
                Explore the Data
            </h1>
            <p
                class="text-2xl lg:w-[70%] pt-4 mx-auto font-normal text-center text-[#696969]"
            >
                Over 100 Points of Interest with relevant location, crops and agricultural data.
            </p>
            <div class="mt-10 mb-20">
                <div id="map" style="height:900px;"></div>
            </div>
        </div>
    </section>
    <!-- Map Section End -->

    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
    <script type="text/javascript">
        function initMap() {
            const myLatLng = { lat: 9.346682, lng: 2.609004};
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 7.1,
                center: myLatLng,
            });

            var locations = {{ Js::from($locations) }};

            var infowindow = new google.maps.InfoWindow();

            var marker, i;
            var markers = [];
            var marker_info = "";
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                    map: map,
                    // label: "This label",
                });

                marker_info = "<div>" + "<strong>Country:</strong> "+locations[i][2] + "<br>" + "<strong>State:</strong> " + locations[i][3] + "<br>" + "<strong>Location:</strong> " + locations[i][4] + "<br>"
                    + "<strong>Crop:</strong> " + locations[i][7]+ "<br>" + "<strong>Local Name:</strong> " + locations[i][8]+ "<br>" + "<strong>Variety:</strong> " + locations[i][9]+ "<br>" + "<strong>Tillage:</strong> " + locations[i][20]+ "<br>"
                    + "</div>";

                locations[i][11] = marker_info;

                google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][11]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));

                markers.push(marker);

            }
            // Add a marker clusterer to manage the markers.
            new markerClusterer.MarkerClusterer({ markers, map });
        }

        window.initMap = initMap;
    </script>

    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>

@stop


