// 1. What's the output?

// function sayHi() {
//     console.log(name);
//     console.log(age);
//     var name = 'Lydia';
//     let age = 21;
//   }

//   sayHi();


// let greeting;
// greetign = {}; // Typo!
// console.log(greetign);


function Person(firstName, lastName) {
  this.firstName = firstName;
  this.lastName = lastName;
}

Person.getFullName = function() {
  return `${this.firstName} ${this.lastName}`;
};

const member = new Person('Lydia', 'Hallie');

console.log(member.constructor);
console.log(member.getFullName());


// function bark() {
//     console.log('Woof!');
// }

// bark.animal = 'dog';
// console.log(bark.animal)