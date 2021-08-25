// Create a regular function without parameters:
function logArguments() {
    // Log "argument" object:
    console.log(arguments)
  }

  // Invoke the "logArguments()":
  logArguments()
  // Output:
  // {
  //   length: 0,
  //   callee: ƒ logArguments(),
  //   __proto__: { ... }
  // }


  // Create a regular function with one parameter:
  function logArguments(hobby) {
    // Log "argument" object:
    console.log(arguments)
  }

  // Invoke the "logArguments()":
  logArguments('reading')
  // Output:
  // {
  //   '0': 'reading',
  //   length: 1,
  //   callee: ƒ logArguments(),
  //   __proto__: { ... }
  // }


  // Create a regular function with two parameters:
  function logArguments(fistName, lastName) {
    // Log "argument" object:
    console.log(arguments)
  }

  // Invoke the "logArguments()":
  logArguments('Jack', 'Jones')
  // Output:
  // {
  //   '0': 'Jack',
  //   '1': 'Jones',
  //   length: 2,
  //   callee: ƒ logArguments(),
  //   __proto__: { ... }
  // }


  // Create a regular function with two parameters:
  function logArguments(fistName, lastName) {
    // Log "argument" object:
    console.log(arguments)
  }

  // Invoke the "logArguments()" and pass more arguments:
  logArguments('Jack', 'Tobias', 'Jones', 'Junior')
  // Output:
  // {
  //   '0': 'Jack',
  //   '1': 'Tobias',
  //   '2': 'Jones',
  //   '3': 'Junior',
  //   length: 4,
  //   callee: ƒ logArguments(),
  //   __proto__: { ... }
  // }