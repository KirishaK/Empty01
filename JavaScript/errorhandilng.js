try {
    let result = someUndefinedFunction();
  } catch (error) {
    console.log("An error occurred:", error.message);
  }
  
//output: An error occured: someUnderfinedFunction is not defined.