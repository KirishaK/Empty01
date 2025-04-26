let str = 'hello123';
let regex = /\d+/; 
 console.log(str.match(regex)); 
 console.log(str.replace(regex, ''));


 //Output: ['123', index:5, input: 'hello123', groups: undefined]
 //hello