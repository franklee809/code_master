let arr = [1,2,3,4,5,[123,23,43,12]];
let obj = {name : '123', age:'123', arr1: ['variant',{'type':"blue"}]};

let [a,b] = arr; // return first and second element
let [c,...d] = arr; // assign 1 and put the rest as an array
let [,,,,,[v1,v2]] = arr;   // skip 3 indexes
let {name: v123, arr2: arr3 = 'nothing inserted'} = obj  // calling nested object, rename and use default values
let {arr1:[type,type2]} =obj;
// console.log(type)
// console.log(type2)
// console.log(a)
// console.log(b)
// console.log(c);
// console.log(d);
console.log(v2);
// console.log(v123);
// console.log(arr3);


// // Using Default Values


// let person = {name: "Sarah", country: "Nigeria", job: "Developer"};

// let {name = "myName", friend = "Annie"} = person; 

// console.log(name);//"Sarah"
// console.log(friend);//"Annie"


// Combining Arrays with Objects
// Arrays can also be used with objects in object destructuring:

// let person = {name: "Sarah", country: "Nigeria", friends: ["Annie", "Becky"]};

// let {name:foo, friends: bar} = person;

// console.log(foo);//"Sarah"
// console.log(bar);//["Annie", "Becky"]