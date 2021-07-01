// Defining our function generator
function* fnGenerator() {
    yield [1];
    yield {2: 12};
    let a = new Set();
    a.add(123)
    yield a;
    return 4;
}

// Create a generator instance from the generator function
const generator = fnGenerator();

console.log(generator); // Iterator [Generator] {}

console.log(generator.next()) // { value: 1, done: false }
console.log(generator.next()) // { value: 2, done: false }
console.log(generator.next()) // { value: 3, done: false }
console.log(generator.next()) // { value: 4, done: true }

console.log(generator.next(0))
console.log(generator.next())