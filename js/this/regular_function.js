// Regular function example:

// Create "Person" class:
class Person {
    // Add some properties:
    constructor(name, age) {
      this.name = name
      this.age = age
    }

    // Add class method:
    getName() {
      console.log(this.name)
    }
  }

// Create instance of "Person":
const jack = new Person('Jack', 44)

// Log the name:
jack.getName()
// Output:
// 'Jack'

// Log the name with different this:
setTimeout(jack.getName, 1000)
// Output:
// ''

// Bind this manually:
setTimeout(jack.getName.bind(jack), 1000)
// Output:
// 'Jack'
