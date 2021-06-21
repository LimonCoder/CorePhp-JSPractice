const takeOder = (customer, callback) => {
    console.log("take order for " + customer);
    callback(customer);

}

const processOder = (customer, callback) => {
    setTimeout(() => {
        console.log("cooking processing for " + customer);
        callback(customer);
    })

};

const completeOrder = (customer) => {
    console.log("cooking complete for " + customer);
}


takeOder('limon', (customer) => {
    processOder(customer, (customer) => {
        completeOrder(customer);
    });
});
