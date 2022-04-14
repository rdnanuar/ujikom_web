fetch("../data/config.txt")
.then(respons => {
    return respons.text()
})
.then((text) => {
    let break_lines = text.split("\r\n")
    // Looping data
    break_lines.forEach(element => {
        // Memisahkan element [|] di dalam string dan covert menjadi array
        let pecah_element = element.split("|")
        document.getElementById("user").innerHTML = `Halo selamat datang ${pecah_element[1]}`
    })
})