async function signup() {
    //AJAX only if there are no errors
    var form = event.target
    if (form.querySelector(".error")) {
        console.log('Cannot continue')
        return
    }
    var connection = await fetch("api/api-create.php", { method: "POST", body: new FormData(form) })
    if (connection.status != 200) {
        alert('contact system admin')
        return
    }
    location.href = "./home.php"
}