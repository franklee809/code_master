/************************ matchAll - String.prototype.matchAll **************************************/
// const string = "Email: franklee809@gmail.com asdad@fasdada.com"
// const regex = /\b([a-z0-9]*)@([a-z0-9\.]*)\b/gi;
// const regex2 = /\b(?<name>[a-z0-9]*)@(?<domain>[a-z0-9\.]*)\b/gi;

// // for(const matchAll in string.matchAll(regex2)){
// //     console.log(matchAll);
// // }
// const array = [... string.matchAll(regex2)];
// console.log(array);

// for(const {0: occurrences,index, input, groups} of string.matchAll(regex2)){
//     console.log(`${occurrences} at ${index} with ${input}`)
//     console.log(`Name : ${groups.name}`)
//     console.log(`Domain : ${groups.domain}`)
// }



/*************************************** Promise.allSettled **************************************/
// const p1 = new Promise((resolve, reject) => resolve("🦄"));
// const p2 = new Promise((_, reject) => reject("🤿"));
// const p3 = new Promise((resolve, reject) => resolve("🏋🏼‍♀️"));

// Promise.all([p1, p2, p3])
//     .then((response) => console.log(response))
//     .catch((err) => console.log(err));

// Promise.allSettled([p1, p2, p3])
//     .then((response) => console.log(response))
//     .catch((err) => console.log(err));


/*************************************** Nullish coalescing **************************************/
// const values = {
//     emptyString: null
// }
// console.log(values.emptyString ?? "Hello world");

