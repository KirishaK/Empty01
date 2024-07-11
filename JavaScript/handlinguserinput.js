const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question('Enter your name: ', (userInput) => {
  console.log('Hello, ' + userInput);
  rl.close();
});


//Output
//Enter your name:
//Hello ......(name)