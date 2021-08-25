// Try to create function constructor with arrow function:
const Human = (name, age) => {
    this.name = name
    this.age = age
  }

  // Try to create new instance of "Human":
  const jess = new Human('Jessica', 28)
  // Output:
  // TypeError: Human is not a constructor