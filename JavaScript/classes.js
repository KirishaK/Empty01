class Person {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }

  greet() {
    console.log("Hello, my name is " + this.name);
  }
}

let person = new Person("Kirisa", 23);
person.greet();


//output: Hello, my name is Kirisa