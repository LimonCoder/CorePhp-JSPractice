var meetings = false;
const promise = new Promise((resolve,reject)=>{
    if(!meetings){
        const meetings = {
            name:'Technical Meetings',
            time:'10:00 PM'
        };
        resolve(meetings);
    }else{

        reject(new Error("meeting has been ready"));
    }
})

const addToCalender = (meetingDetails)=> {
    const  message = meetingDetails.name +"has been scheduled on"+meetingDetails.time;
    return  Promise.resolve(message);
}


promise
    .then(addToCalender)
    .then((response)=>{
    console.log(JSON.stringify(response))
}).catch((error) => {
    console.log(error.message);
} )