//// TODO: null coalescing operator
// function test(price, tax, description){

//     console.log(`%c${price} has tax ${tax}` , 'font-size: 30px')
//     console.log(`${description}`)
// }


// test(12, .1, "Test 1")
// test(100, 0, "Test 2")
// test(null, null, "Test 3")


// TODO: optional chaining

const person = {
    name: 'John',
    age: 12,
    gender: 'male',
    print: function(){
        console.log(`${this.name} is ${this.age}`)
    }
}


console.log({person})