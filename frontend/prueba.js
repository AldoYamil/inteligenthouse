var myHeaders = new Headers();
myHeaders.append("x-access-token", "openuv-4fo1jrm8mgb2zn-io");
myHeaders.append("Content-Type", "application/json");

var requestOptions = {
  method: 'GET',
  headers: myHeaders,
  redirect: 'follow'
};

fetch("https://api.openuv.io/api/v1/uv?lat=32.49008092466661&lng=-116.86744708025128&alt=100&dt=", requestOptions)
  .then(response => response.json())
  .then(result => {
    console.log(result);
    document.getElementById('uv-index').innerText = `Índice UV: ${result.result.uv}`;
    document.getElementById('uv-max').innerText = `Índice UV Máximo: ${result.result.uv_max}`;
    document.getElementById('uv-time').innerText = `Hora del Índice UV Máximo: ${result.result.uv_max_time}`;
  })
  .catch(error => console.log('error', error));