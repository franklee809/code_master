const fetch = require("node-fetch");

// fetch('https://reqres.in/api/users',{
//     method: 'POST',
//     headers: {
//         'Content-Type': 'application/json'
//     },
//     body: JSON.stringify({
//         name : 'User 1'
//     })
// })
//     .then(res => {
//         if(res.ok){
//             console.log("OK");
//         }else{
//             console.log("FAILURE");
//         }
//         return res.json()
//     })
//     .then(data => console.log(data))
//     .catch(error => console.log(error))

// function frankenSplice(arr1, arr2, n) {
//     return arr2.splice(n,0,...arr1);
//   }

// console.log(frankenSplice([1, 2, 3], [4, 5, 6], 1));

let arr = [1,2,4,3];
console.log(Math.min.apply(null,arr));