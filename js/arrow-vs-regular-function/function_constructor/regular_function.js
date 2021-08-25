// Create function constructor "Human":
function Human(name, age) {
    // Create and assign new properties:
    this.name = name
    this.age = age

    // Add constructor method:
    this.sayHello = () => `Hi, my name is ${this.name}.`
  }

  // Create new instance of "Human":
  const joe = new Human('Joel', 33)

  // Check if "joe" is instance of "Human":
  console.log(joe instanceof Human)
  // Output:
  // true

  // Call the "sayHello()" method on "joe" instance:
  console.log(joe.sayHello())
  // Output:
  // 'Hi, my name is Joel.'