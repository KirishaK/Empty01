function greet(name) {
  return "Hello, " + name;
}

function processUserInput(callback) {
  let name = "Kirisa";
  console.log(callback(name));
}

processUserInput(greet);
