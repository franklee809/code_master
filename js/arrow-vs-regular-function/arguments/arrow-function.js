// Create arrow function in a global scope:
const logArguments = () => {
    // Try to log "argument" object:
    console.log(arguments)
  }

  // Invoke the "logArguments()":
  logArguments()
  // Output:
  // ReferenceError: arguments is not defined


  // Try adding parameters:
  const logArguments2 = (a, b) => {
    // Try to log "argument" object:
    console.log(arguments)
  }

  // Invoke the "logArguments()" with some arguments:
  logArguments2('One', 'Two')
  // Output:
  // ReferenceError: arguments is not defined


  // Create arrow function inside a regular function:
  function parentFunction() {
    const logArguments = () => {
      // Try to log "argument" object:
      console.log(arguments)
    }

    // Invoke "logArguments()":
    logArguments()
  }

  // Invoke the "logArguments()":
  parentFunction('One', 'Two')
  // Output:
  // {
  //   '0': 'One',
  //   '1': 'Two',
  //   length: 2,
  //   callee: ƒ parentFunction(),
  //   __proto__: { ... }
  // }