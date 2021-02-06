// 2.1
for (let n = 1; n <= 100; n++) {

    let output = "";
    if ( n % 3 == 0) output += 'Fizz';
    if ( n % 5 == 0 ) output += 'Buzz';
    console.log ( output || n)
}

// 2.2
let size = 8;

let board = "";

for (let y = 0; y < size; y++) {
  for (let x = 0; x < size; x++) {
    if ((x + y) % 2 == 0) {
      board += " ";
    } else {
      board += "#";
    }
  }
  board += "\n";
}

console.log(board);

function printFarmInventory(cows, chickens) {
    let cowString = String(cows);
    while (cowString.length < 3) {
    cowString = "0" + cowString;
    }
    console.log(`${cowString} Cows`);
    let chickenString = String(chickens);
    while (chickenString.length < 3) {
    chickenString = "0" + chickenString;
    }
    console.log(`${chickenString} Chickens`);
    }
    printFarmInventory(7, 11);

    function printZeroPaddedWithLabel(number, label) {
        let numberString = String(number);
        while (numberString.length < 3) {
        numberString = "0" + numberString;
        }
        console.log(`${numberString} ${label}`);
        }
        function printFarmInventory(cows, chickens, pigs) {
        printZeroPaddedWithLabel(cows, "Cows");
        printZeroPaddedWithLabel(chickens, "Chickens");
        printZeroPaddedWithLabel(pigs, "Pigs");
        }
        printFarmInventory(7, 11, 3);
        
        minValue = (a,b) => {
            if (a < b) console.log(a);
        else console.log(b);
        console.log(minValue(5,6))
        }

        isEven = (a,b) => {
            if (a % 2 === 0) return true;
            if (b % 2 === 0) return true;
            else return 'Not an even no';
        }

        function isEven(n) {
            if (n == 0) return true;
            else if (n == 1) return false;
            else if (n < 0) return isEven(-n);
            else return isEven(n - 2);
          }
          
          console.log(isEven(50));
          // → true
          console.log(isEven(75));
          // → false
          console.log(isEven(-1));
          // → false


          let day1 = {
            squirrel: false,
            events: ["work", "touched tree", "pizza", "running"]
            };

            function tableFor(event, journal) {
                let table = [0, 0, 0, 0];
                for (let i = 0; i < journal.length; i++) {
                let entry = journal[i], index = 0;
                if (entry.events.includes(event)) index += 1;
                if (entry.squirrel) index += 2;
                table[index] += 1;
                }
                return table;
                }
                console.log(tableFor("pizza", JOURNAL));
                // → [76, 9, 4, 1]
                let todoList = [];
                function remember(task) {
                todoList.push(task);
                }
                function getTask() {
                return todoList.shift();
                }
                function rememberUrgently(task) {
                todoList.unshift(task);
                }
                                
            