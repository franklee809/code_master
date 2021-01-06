/* Remove whitespace (spaces, newlines, tabs and similar characters) */
// console.log("  okay \n ".trim())

/* take desired length and padding characters as arguments*/
// console.log(String(123).padStart(10,"0"));

/* Split string*/
// let sentence = "Secretarybirds specialize in stomping";
// let words = sentence.split(" ");
// console.log(words);

/* join array into a string */
// console.log(words.join(" ")+".");

/* Repeat string */
// console.log("LA".repeat(3));

/* string length */
// console.log("abc".length)


function countBy(items, groupName) {
    let counts = [];
    for (let item of items) {
        let name = groupName(item);
        console.log(name)
        let known = counts.findIndex(c => c.name == name); 
        if (known == -1) {
        counts.push({name, count: 1}); } else {
        counts[known].count++; }
    }
    return counts;
  }
 console.log(countBy([1, 2, 3, 4, 5], n => n > 2));
 
