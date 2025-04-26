let person = {
    firstName: "kirisha",
    lastName: "navam",
    age: 23,
    fullName: function() {
        return this.firstName + " " + this.lastName;
    }
};
console.log(person.fullName());  


//Output: kirisha navam