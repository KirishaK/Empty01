 class CustomError extends Error { constructor(message) 
    { 
        super(message); this.name = 'CustomError'; 
    } 
} 
 try {
     throw new CustomError('Something went wrong');
     } catch (error)
  {
     console.error(error.name + ': ' + error.message);
     }


     //Output: CustomError: Something went wrong