class CashRegister {
  
  constructor(cashAvailable) {
    this.cashAvailable = cashAvailable;
  }

  calcBalance() {
    var balance = 0;
    for(const [coin, quantity] of Object.entries(this.cashAvailable)) {
      balance += coin * quantity;
    }
    return balance;
  }

  addCoin(coins) {
    for(const [coin, quantity] of Object.entries(coins)) {
      this.cashAvailable[coin] = this.cashAvailable[coin] + quantity;
    }
  }

  removeCoin(coins) {
    for(const [coin, quantity] of Object.entries(coins)) {
      this.cashAvailable[coin] = this.cashAvailable[coin] - quantity;
    }    
  }

  reverseHeapsort(dict) {
    var newArray = [];
    while(Object.keys(dict).length!==0) {
      var max = 0;
      for(const [key, value] of Object.entries(dict)) {
        if(parseFloat(key) > parseFloat(max)) {
          max = parseFloat(key);
        }
      }
      newArray.push({[max]: dict[max]});
      delete dict[max]; 
    }
    return newArray;
  }

  calcCashBack(change, callback, cashBack = {}) {
    if(change === 0) {
      return callback(cashBack);
    } else {
      var cashAvailable = this.reverseHeapsort(this.cashAvailable);
      for(var key in cashAvailable){
        var coin = Object.keys(cashAvailable[key])[0];
        var quantity = cashAvailable[key][coin];
        if(change>=coin&&quantity>0) {
          change -= coin;
          quantity--;
          this.cashAvailable[coin] = quantity;
          if(cashBack[coin]!==undefined) { cashBack[coin]++ }
          else { cashBack[coin] = 1; }
          this.calcCashBack(change, callback, cashBack);
        }
      }
    }
  }

  calcChange(total, received) {
    var change = received - total;
    if(change < 0) { return 'Incomplete payment!'; }
    else if(change === 0) { return 'No change.' }
    else {
      this.calcCashBack(change, function(cashBack) {
        for(const [coin, quantity] of Object.entries(cashBack)) {
          console.log(quantity+' of '+coin);
        }
      });
    }
  }

  printBalance() {
    console.log(this.calcBalance());
  }

  openCashRegister()

  console() {
    var stdin = process.openStdin();
    stdin.addListener("data", function(d){
      var input = d.toString().trim();
      console.log(input);
      if(input==='exit') { stop; }
    });
  }

}

var cashRegister = new CashRegister({
  '100': 100,
  '50': 100,
  '20': 100,
  '10': 100,
  '5': 100,
  '2': 100,
  '1': 100,
  '0.5': 100,
  '0.25': 100,
  '0.1': 100,
  '0.05': 100,
  '0.01': 100
});

// cashRegister.printBalance();
// cashRegister.addCoin({'0.01': 100, '5': 1, '2': 1, '1': 1, '50': 2, '100': 10});
// cashRegister.printBalance();
// cashRegister.removeCoin({'0.01': 100, '5': 1, '2': 1, '1': 1, '50': 2, '100': 10});
// cashRegister.printBalance();
// cashRegister.calcChange('55.5','87');
cashRegister.console();