var fs = require('fs')
fs.readFile("../data/data_perjalanan.txt", 'utf8', function (err,data) {
  if (err) {
    return console.log(err);
  }
  var result = data.replace('80|2022-12-15|17:00|123|Jakarta', '100|2022-12-20|10:00|35|Lembang');

  fs.writeFile("../data/data_perjalanan.txt", result, 'utf8', function (err) {
     if (err) return console.log(err);
  });
});