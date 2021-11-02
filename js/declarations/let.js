var a = 2; // var declarations

{ // Implicit block scoping
    let a = 3, b, c; // let declarations bound to this block
    console.log("🚀 ~ file: let.js ~ line 5 ~ a", a);
    console.log("🚀 ~ file: let.js ~ line 4 ~ b", b);
}

console.log("🚀 ~ file: let.js ~ line 1 ~ a", a);


// second type (Explicit block scoping) (Not compatible in ES6)

// let(a = 5, b, c){
//     console.log("🚀 ~ file: let.js ~ line 15 ~ let ~ a", a);
// }