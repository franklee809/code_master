function spinWords(string){
    var newString = '';
    var arr = string.split(" ");
    for (var x in arr){
        if(arr[x].length >= 5){
            var n = "";
            for (var i = arr[x].length - 1; i >= 0; i--) { 
                n += arr[x][i];
            }
            newString += n.concat(' ');
        }
        else{
            newString += arr[x].concat(' ')
        }
    }
    return newString.trim(); 
}

console.log(spinWords('Welcome to my class'))

// Best Answers

// function spinWords(words){
//     return words.split(' ').map(function (word) {
//       return (word.length > 4) ? word.split('').reverse().join('') : word;
//     }).join(' ');
//   }

// function spinWords(string){
//     return string.replace(/\w{5,}/g, function(w) { return w.split('').reverse().join('') })
//   }