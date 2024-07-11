function fetchData(callback) {
  setTimeout(() => {
    callback("Data received");
  }, 1000);
}

function displayData(data) {
  console.log(data);
}

fetchData(displayData);


//output: Data received