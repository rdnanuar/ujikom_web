function _filter() {
    let input, filter, table, tr, td, i, cell;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");
    // Looping Setiap row di dalam table
    for (i = 1; i < tr.length; i++) {
        tr[i].style.display = "none";
        td = tr[i].getElementsByTagName("td");
        // Looping setiap data di dalam table
        for (let j = 0; j < td.length; j++) {
          cell = tr[i].getElementsByTagName("td")[j];
          if (cell) {
            if (cell.innerText.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
              break;
            } 
          }
        }
    }
}



// Read file
fetch("../data/data_perjalanan.txt")
  .then((response) => {
    // Mengubah return response ke dalam text()
      return response.text();
  })
  .then((text) => {
  let data = '';
  let increment = 1;
  // mengubah text(string) menjadi array
  let break_lines =  text.split("\r\n")
  // Looping data
  break_lines.forEach(element => {
  // Memisahkan element [|] di dalam string dan covert menjadi array
  let pecah_element = element.split("|")
  data += "<tr>"
  // Menambahkan increment setiap data ditambahkan
  data += "<td>"+ increment++ +"</td>"
  // Mengambil index di dalam array
  data += "<td>"+pecah_element[0]+"</td>"
  data += "<td>"+pecah_element[1]+"</td>"
  data += "<td>"+pecah_element[2]+"</td>"
  data += "<td>"+pecah_element[3]+"</td>"
  data += "<td>"+pecah_element[4]+"</td>"
  data += "</tr>"
  })
  document.getElementById("data").innerHTML = data;
})