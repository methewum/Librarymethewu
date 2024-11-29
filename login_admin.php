<?php
    
    <script> function validateForm() { var username = document.getElementById('username').value; var password = document.getElementById('password').value; if (username == "admin" && password == "12345") { window.location.href = "menuutama.html"; } else { alert("Username atau Password salah!"); return false; } } </script>
?>
