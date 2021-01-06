/*************************************** Convert array to object **************************************/

// const arr = [1,2,3];

// console.log(Object.assign({},arr));



/*************************************** Simple map method **************************************/
let arr = [
    {"name":'Josh1',age:'1',purchaseId: '1'},
    {name:'Josh2',age:'2',purchaseId: '2'},
    {name:'Josh3',age:'3',purchaseId: '3'},
    {name:'Josh4',age:'4',purchaseId: '4'},
    {name:'Josh5',age:'5',purchaseId: '5'},
]

let a = arr.map(val => val.purchaseId)

console.log(a);