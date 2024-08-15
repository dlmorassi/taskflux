function cad(){
    const lg = document.getElementById("login")
    const cd = document.getElementById("cadastro")
    cd.style.display = "block"
    lg.style.display = "none"
}

function log(){
    const lg = document.getElementById("login")
    const cd = document.getElementById("cadastro")
    cd.style.display = "none"
    lg.style.display = "block"
}

function addpdt(){
    const btn = document.getElementById("add-pdt-p")
    const frm = document.getElementById("form-task-pdt")
    btn.style.display = "none"
    frm.style.display = "block"
}

function addttm(){
    const btn = document.getElementById("add-ttm-p")
    const frm = document.getElementById("form-task-ttm")
    btn.style.display = "none"
    frm.style.display = "block"
}

function addccd(){
    const btn = document.getElementById("add-ccd-p")
    const frm = document.getElementById("form-task-ccd")
    btn.style.display = "none"
    frm.style.display = "block"
}

function clpdt(){
    const btn = document.getElementById("add-pdt-p")
    const frm = document.getElementById("form-task-pdt")
    btn.style.display = "block"
    frm.style.display = "none"
}

function clttm(){
    const btn = document.getElementById("add-ttm-p")
    const frm = document.getElementById("form-task-ttm")
    btn.style.display = "block"
    frm.style.display = "none"
}

function clccd(){
    const btn = document.getElementById("add-ccd-p")
    const frm = document.getElementById("form-task-ccd")
    btn.style.display = "block"
    frm.style.display = "none"
}