function cpfe() {
    var cpfef = document.getElementById("cpf").value;

    if (cpfef[3] != ".") {
        if (cpfef[3] != undefined) {
            cpfef = cpfef.slice(0, 3) + "." + cpfef.slice(3);
        }
    }

    if (cpfef[7] != ".") {
        if (cpfef[7] != undefined) {
            cpfef = cpfef.slice(0, 7) + "." + cpfef.slice(7);
        }
    }

    if (cpfef[11] != "-") {
        if (cpfef[11] != undefined) {
            cpfef = cpfef.slice(0, 11) + "-" + cpfef.slice(11);
        }
    }

    document.getElementById("cpf").value = cpfef;
}

function rge() {
    var rgef = document.getElementById("rg").value;

    if (rgef[2] != "-") {
        if (rgef[2] != undefined) {
            rgef = rgef.slice(0, 2) + "-" + rgef.slice(2);
        }
    }

    if (rgef[5]!= ".") {
        if (rgef[5] != undefined) {
            rgef = rgef.slice(0, 5) + "." + rgef.slice(5);
        }
    }

    if (rgef[9] != ".") {
        if (rgef[9] != undefined) {
            rgef = rgef.slice(0, 9) + "." + rgef.slice(9);
        }
    }

    document.getElementById("rg").value = rgef;
}