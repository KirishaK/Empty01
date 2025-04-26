const person = {
    fn: 'kirisa',
    ln: 'navam',
    age: 23,
};

for(const key in person){
    console.log(key);
    console.log(person[key]);
}