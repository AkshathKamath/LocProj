<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Location</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        #map {
            height: 500px;
            width: 50%;
        }
    </style>
</head>

<body>
    
    <div class="container"><h1>Location</h1></div>
    <div class="container mx-4 my-4" id="map">

    </div>
    <div class="container my-2">
        <span>
            <p>Your Location is shown above.Is it Correct?</p>
            
        </span>
    </div>
    <div class="container my-2">
    <p>Also Describe the accident</p>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <button class="btn btn-primary btn-sm">Confirm</button>
        <h4>If Correct then Click button to call nearest ambulance</h4>
        <a class="btn btn-danger" href="final.php" role="button">Call Ambulance</a>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script>
        var lati;
        var loni;
        function getloc(){
            navigator.geolocation.getCurrentPosition(showPosition);
        }
        function showPosition(position){
            lati=position.coords.latitude;
            loni=position.coords.longitude;
            console.log(lati);
            console.log(loni);
        }
        getloc();
        function initMap() {
  // The location of Uluru
  var locate = {lat:lati,lng:loni};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById("map"), {zoom: 12, center: locate});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: locate, map: map});
}

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFRTZReQqL1LGdCeAMiYahqdEcJEEvWbc&callback=initMap">
    </script>
</body>

</html>