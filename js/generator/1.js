// Defining our function generator
function* fnGenerator() {
    yield 1;
    yield 2;
    yield 3;
    return 4;
}

// Create a generator instance from the generator function
const generator = fnGenerator();

console.log(generator); // Iterator [Generator] {}

console.log(generator.next()) // { value: 1, done: false }
console.log(generator.next()) // { value: 2, done: false }
console.log(generator.next()) // { value: 3, done: false }
console.log(generator.next()) // { value: 4, done: true }