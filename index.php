<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX 1 -</title>
</head>

<body>

    <div id="btn1">Ajouter du texte ci dessous 1</div>
    <div id="response1"></div>



    <script>
        const btn1 = document.querySelector('#btn1');


        function getText1(event) {
            let xhttp = new XMLHttpRequest();

            xhttp.open('GET', 'demo1.php')
        }

        btn1.addEventListener('click', getText1)
    </script>
</body>

</html>