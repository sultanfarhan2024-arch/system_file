// javaScript Project File

console.log("Hello World!");

function greet(){
    alert("Well Come to HOXEEN");
}

let namee = "farhan";

console.log(namee.toUpperCase());

namee.split("").forEach(nam => console.log(nam));

let arry = [23,67,45,71,56,45,56];

let largestNumber = arry[0];

for(let i = 0; i < arry.length; i++){
    if(arry[i] > largestNumber){
        largestNumber = arry[i];
    }
}

console.log(largestNumber);

let minNumber = arry[0];

for(let i = 0; i < arry.length; i++){
    if(arry[i] < minNumber){
        minNumber = arry[i];
    }
}

console.log(minNumber);

let sum = 0;

for(let i = 0; i < arry.length; i++){
    sum = sum + arry[i];
}

console.log(sum);

let avgNumber = sum / arry.length;

console.log(avgNumber);