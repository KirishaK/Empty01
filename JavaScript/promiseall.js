let promise1 = Promise.resolve('First');
 let promise2 = Promise.resolve('Second');
 Promise.all([promise1, promise2]).then(results => 
    console.log(results));

    //Output: ['First', 'Second']