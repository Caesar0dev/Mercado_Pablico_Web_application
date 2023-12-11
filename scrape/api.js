// const fetch = require('node-fetch');

async function getDetails() {
  // for (let i = 0; i < 5020; i++) {
  for (let i = 0; i < 5; i++) {
    const newDate = new Date();
    newDate.setDate(newDate.getDate() - i);
    const startDate = newDate.toISOString().split('T')[0];
    const fechaDate = startDate.split("-")[2] + startDate.split("-")[1] + startDate.split("-")[0];
    console.log(">>>>>>>>>>>>>>>>>>>>   ", fechaDate, "    <<<<<<<<<<<<<<<<<<<<<<<");
    
    let targetURL = `https://api.mercadopublico.cl/servicios/v1/publico/licitaciones.json?fecha=${fechaDate}&estado=Publicada&ticket=F8537A18-6766-4DEF-9E59-426B4FEE2844`;
    
    await fetch(targetURL, {
      "headers": {
        "accept": "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
        "accept-language": "de,en-US;q=0.9,en;q=0.8",
        "cache-control": "max-age=0",
        "sec-ch-ua": "\"Google Chrome\";v=\"119\", \"Chromium\";v=\"119\", \"Not?A_Brand\";v=\"24\"",
        "sec-ch-ua-mobile": "?0",
        "sec-ch-ua-platform": "\"Windows\"",
        "sec-fetch-dest": "document",
        "sec-fetch-mode": "navigate",
        "sec-fetch-site": "none",
        "sec-fetch-user": "?1",
        "upgrade-insecure-requests": "1",
        "cookie": "_gid=GA1.2.1697758723.1700504264; _hjIncludedInSessionSample_637179=0; _hjSessionUser_3250843=eyJpZCI6IjJkODU0NTljLTgzMGUtNTdlMi1hMjMzLTE3NGQ2ZWUwNzMzNCIsImNyZWF0ZWQiOjE3MDA1MDQyNjM4MDAsImV4aXN0aW5nIjp0cnVlfQ==; _hjSessionUser_637179=eyJpZCI6Ijc0NTc2ZTEwLWNhNDQtNTk1Ni1iZjE2LWZjOTlhZDFkMDMyNyIsImNyZWF0ZWQiOjE3MDA1MDQzMjI4MDAsImV4aXN0aW5nIjp0cnVlfQ==; _hjSessionUser_438506=eyJpZCI6ImZiNmYyOTFkLTJjOTQtNTRjNC04NTYxLTNlMTFmYjIzNzc1ZiIsImNyZWF0ZWQiOjE3MDA1MDQzNjczNzksImV4aXN0aW5nIjp0cnVlfQ==; _hjAbsoluteSessionInProgress=0; _hjIncludedInSessionSample_3250843=0; _hjSession_637179=eyJpZCI6IjI1NzNmZjQ4LThjYjQtNDg2NS1hODUzLTU5YWU4NTcxMTQ0ZiIsImNyZWF0ZWQiOjE3MDA1NjYzNzA0ODgsImluU2FtcGxlIjpmYWxzZSwic2Vzc2lvbml6ZXJCZXRhRW5hYmxlZCI6dHJ1ZX0=; _ga_83DNLS44VH=GS1.1.1700504266.1.1.1700568663.56.0.0; _ga=GA1.1.356433933.1700504264"
      },
      "referrerPolicy": "strict-origin-when-cross-origin",
      "body": null,
      "method": "GET"
    })
      .then(response => {
          if (response.ok) {
            console.log("response okay!!!");
              return response.json(); // assuming the response is in JSON format
          } else {
              throw new Error("Request failed with status " + response.status);
          }
      })
      .then(data => {
        // handle the response data here
        const creationData = data.FechaCreacion;
        console.log("creation data : ", creationData);
        const jobList = data.Listado;
        for (let i = 0; i < jobList.length; i++) {
          const job = jobList[i];
          console.log("job : ", job);
        }
      
      })
      .catch(error => {
        // handle any errors that occurred during the request
        console.error("Error::: ", error);
      });
  }
}

getDetails();