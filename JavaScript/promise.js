 let promise = new Promise((resolve, reject) => { let success = true; if (success) 
    { 
        resolve('Promise resolved'); 
    }
  else { 
    reject('Promise rejected');
 } });
  promise.then(message => console.log(message)).catch(error => console.error(error));


  //output: Promise resolved