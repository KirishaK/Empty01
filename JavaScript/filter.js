let arr=[10,20,30,40,50,60,70];
let newArr=arr.filter(value=>{
    if(value>30){
        return true;
    }
});
console.log(newArr);