const url = "/data.json";
// const url = "https://www.trackcorona.live/api/countries";
function updateMap() {
  fetch(url)
    .then((response) => response.json())
    .then((rsp) => {
      //   console.log("i am here");
      //   console.log(rsp);
      rsp.data.forEach((element) => {
        let latitude = element.latitude;
        let longitude = element.longitude;
        let cases = element.infected;
        // cases = element.confirmed;
        let color;
        if (cases > 500) {
          color = "rgb(255,0,0)";
        } else if (cases > 300) {
          color = `rgb(${Math.floor(cases / 10) + 200},0,0)`;
        } else if (cases > 100) {
          // (255,255,0)
          color = `rgb(${Math.floor(cases / 10) + 100},0,0)`;
        } else if (cases > 10) {
          color = "rgb(255,255,0)";
        } else {
          color = `rgb(0,${255 - cases},0)`;
        }
        // console.log(cases);
        // now mark on the  map
        new mapboxgl.Marker({
          draggable: false,
          color: color,
        })
          .setLngLat([longitude, latitude])
          .addTo(map);
      });
    });
}

updateMap();
