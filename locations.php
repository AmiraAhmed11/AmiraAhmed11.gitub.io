<script>
        $(document).ready(function(){
        $("#get-location").click(function(){
            getLocation();
        });
     });
     function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(saveLocation);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function saveLocation(position) {
        var lat = position.coords.latitude;
        var long = position.coords.longitude;

        // Send location data to server using AJAX
        $.ajax({
            url: 'location.php',
            type: 'POST',
            data: {latitude: lat, longitude: long},
            success: function(response) {
                alert("Location saved successfully!");
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert("Error saving location.");
            }
        });
    }
</script>