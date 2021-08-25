// Arrow function example:
class Person {
    constructor(name, age) {
      this.name = name
      this.age = age
    }

    getName = () => {
      console.log(this.name)
    }
  }

  // Create instance of "Person":
  const jack = new Person('Jack', 44)

  // Log the name:
  jack.getName()
  // Output:
  // 'Jack'

  // Log the name with timeout:
  setTimeout(jack.getName, 1000)
  // Output:
  // 'Jack'