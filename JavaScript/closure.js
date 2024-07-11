function makeCounter() {
    let count = 0;
    return function() {
      count++;
      return count;
    };
  }
  
  let counter = makeCounter();
  console.log(counter()); // Output: 1
  console.log(counter()); // Output: 2
  