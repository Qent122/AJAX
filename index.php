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

    <div id="btn2">Ajouter du texte ci dessous 2</div>
    <div id="response2"></div>










    <script>
        const btn1 = document.querySelector('#btn1');
        const response1 = document.querySelector('#response1');



        // Test 1
        function getText1(event) {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // console.log(this.responseText);
                    response1.innerHTML = this.responseText;
                }
            }


            xhttp.open('GET', 'demo1.php');
            xhttp.send()
        }

        btn1.addEventListener('click', getText1)

        // Test 2

        const btn2 = document.querySelector('#btn2');
        const reponse2 = document.querySelector('#reponse2');

        function getUser() {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                }
            }


            xhttp.open('GET', 'ajax/demo2.php?nom=Cliquot&prenom=Quentin&age=20');
            xhttp.send()
        }

        btn2.addEventListener('click', getUser);
    </script>

</body>

</html>