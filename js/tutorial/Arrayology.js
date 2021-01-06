let todoList = [];

// Add an element to the end of the list
function remember(task){
    todoList.push(task);
}

// Get the first element of the list (element in the array will be pulled)
function getTask(){
    return todoList.shift();
}

// Add an element to the front of the list and return the index of updated array 
function rememberUrgently(task){
    return todoList.unshift(task);
}

remember("meeting");remember("schedule");remember("client");remember("meal");remember("flight")
// console.log(todoList)
// console.log(getTask())
// console.log(rememberUrgently("schedule"))

// console.log(todoList)


/* Search the array: slice(start,end) */
// console.log([1,2,3,4,5].slice(2,4));
// console.log([1,2,3,4,5].slice(2));

/* slice() : without parameters just copy the whole array */
// console.log([1,2,3,4,5].slice());


/* slice and concat methods */
function remove(array,index){
    return array.slice(0,index)
        .concat(array.slice(index+1))
}
console.log(remove(["a", "b", "c", "d", "e"],2));

