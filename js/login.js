var user = document.getElementById('user');
var pass = document.getElementById('password')
var admin = document.getElementById('admin');
function f_login() {
    admin.innerHTML = '';
    if(user.value =='admin' && pass.value =='admin'){
        admin.innerHTML += '<a href="admin.php" style="color:black; text-decoration: none; border-radius: 5px; border: 1px solid black; margin-left:110px">Go to the admin page</a>';
    }
    else{
        window.alert('Wrong username or Password');
    }
}