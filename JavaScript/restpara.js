function sum(...numbers) 
{ 
    return numbers.reduce((total, num) => total + num);
 } 
console.log(sum(1, 2, 3));


//Output: 6