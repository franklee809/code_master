/* 1. we create an array consist of numbers */
const array = ['1','2','3'];

// for(let i = 0; i < array.length; i++){
//     console.log(Object(array[i]));
// }

/* Map function - used to display parameters for map function */
// const val1 = (str, i ,origin) =>{
//     console.log(`${i} : ${Number(str)} / ${origin}`);
// }

// array.map((str,i,origin)=> console.log(`${i} : ${Number(str)} / ${origin}`));

/* map function with object */

// const obj = {name: 'Jane'};

/* Can access this instance - limitation: array cannot be empty, but it can be any value */
// [1].map(function(){
//     console.dir(this);
// },obj)


/* Cannot access this instance*/

// [1].map(()=>{
//     console.dir(this);
// },obj)


// console.dir([1,2,3].map(str => str+1)); // return an new array, didn't change the original array
// console.log([1,2,3].forEach(str => str+1)); // return the original array


const people = [
    {name:'Josh', whatCanDo:'painting'},
    {name:'Jeniffer', whatCanDo: 'modelling'},
    {name:'Ralph', whatCanDo:'security'}
]

function makeWorkers(people){
    return people.map(person => {
        const {name, whatCanDo} = person;
        return `<li key=${name}> My name is ${name}, I can do ${whatCanDo} </li>`
    })
}

console.log(makeWorkers(people))