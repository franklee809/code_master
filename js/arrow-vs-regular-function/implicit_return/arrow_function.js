// Create arrow function with implicit return:
const returnRandomNumber = () => Math.floor(Math.random() * 10)
// Note: it implicitly returns expression
// that follows after the "=>" (fat arrow).

// Invoke the "returnRandomNumber()":
returnRandomNumber()
// Output:
// 0


// The same as:
const returnRandomNumber = () => {
  // Return random number explicitly:
  return Math.floor(Math.random() * 10)
}

// Invoke the "returnRandomNumber()":
returnRandomNumber()
// Output:
// 7