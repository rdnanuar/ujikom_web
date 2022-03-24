function login() {
    // dom js
    const nik = document.getElementById("nik").value
    const username = document.getElementById("username").value
    // Baca Data dari file config
    const get_data = fetch("../data/config.txt")
    get_data.then(response => {
    // Convert response menjadi text
    return response.text()
    })
    .then((text) => {
        // mengubah text(string) menjadi array dan memisahkan regex new_lines dan cariage return
        let break_lines =  text.split("\r\n")
        // Looping data
        break_lines.forEach(element => {
            // Memisahkan element [|] di dalam string dan covert menjadi array
            let pecah_element = element.split("|")
            console.log(pecah_element)
            // Validasi Login input value user
            if (pecah_element[0] == nik && pecah_element[1] == username) {
                window.location.assign("menu.html")
                alert(`Anda Berhasil login Sebagai ${pecah_element[1]}`)
            }
        })
    })
}

function validation() {
    // dom js
    const nik = document.getElementById("nik").value
    const username = document.getElementById("username").value
    // Baca Data dari file config
    const get_data = fetch("../data/config.txt")
    get_data.then(response => {
    // Convert response menjadi text
    return response.text()
    })
    .then((text) => {
        // mengubah text(string) menjadi array dan memisahkan regex new_lines dan cariage return
        let break_lines =  text.split("\r\n")
        let pecah_element;
        // Looping data
        break_lines.forEach(element => {
            // Memisahkan element [|] di dalam string dan covert menjadi array
            pecah_element = element.split("|")
        })
        // Validation input login value user
        if(pecah_element[0] != nik && pecah_element[1] != username) {
            alert("NIK atau Username anda salah")
        }
    })
}