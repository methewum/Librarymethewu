<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Belajar PHP</h1>
    <div id="phpDays"></div>

    <script>
        let phpDays = document.getElementById("phpDays");
        for (let i = 1; i <= 1000; i++) {
            let text = Ini adalah hari ke-${i} belajar PHP;
            phpDays.innerHTML += <p>${text}</p>;
        }
    </script>
</body>

