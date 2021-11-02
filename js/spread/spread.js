// Spread or REST operator

function foo(x,y,z){
    console.log("🚀 ~ file: spread.js ~ line 4 ~ foo ~ x,y,z", x,y,z, "\n")
}

foo( ...[1,2,3]);   // ES6

foo.apply(null, [1,2,3]); // pre ES6

// Case 2

var a = [2,3,4];
var b = [1, ...a, 5];
console.log("🚀 ~ file: spread.js ~ line 15 ~ b", b, "\n")


// Case 3

function bar(...args){
    console.log("🚀 ~ file: spread.js ~ line 21 ~ bar ~ args", args);
}

bar(1,2,3,3,4,5,6);