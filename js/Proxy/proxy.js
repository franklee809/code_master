
const user = {
    firstName: 'John',
    lastName: 'Doe',
    email: 'john.doe@example.com',
    age: 12
}

const handler = {
    get(target, property) {
        console.log(`Property ${property} has been read.`);
        return target[property];
    },
    set(target, property, value) {
        if (property === 'age') {
            if (typeof value !== 'number') {
                throw new Error('Age must be a number.');
            }
            if (value < 18) {
                throw new Error('The user must be 18 or older.')
            }
        }
        target[property] = value;
    },
    getPrototypeOf(target) {
        return Object.prototype;
    },
}

let proxyUser = new Proxy(user, handler);

console.log(proxyUser.firstName);
console.log(proxyUser.lastName);


// proxyUser.firstName = 'Franklin'
// proxyUser.age = 12
// console.log(proxyUser.age);
