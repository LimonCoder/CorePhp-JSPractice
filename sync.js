const processOrder  = (customer) => {
    console.log("processing order for customer 1");

    var currentTime = new Date().getTime();
    // asynchronous function //
   setTimeout(()=>{
       // synchronous behaviour //
       while (currentTime + 30000 >= new Date().getTime() );
   },300);

    console.log("running order for customer 1");
}
console.log("take order for customer 1");
processOrder();
console.log("complete order for customer 1");