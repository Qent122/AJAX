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

    <div id="btn3">Ajouter du texte ci dessous 3</div>
    <div id="response3"></div>

    <div id="btn4">Ajouter du texte ci dessous 4</div>
    <div id="response4"></div>






    <script>
        const btn1 = document.querySelector('#btn1');
        const response1 = document.querySelector('#response1');


        //=======================================================================================
        // Test 1
        //=======================================================================================

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
        //=======================================================================================
        // Test 2
        //=======================================================================================

        const btn2 = document.querySelector('#btn2');
        const reponse2 = document.querySelector('#reponse2');

        function getUser() {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // console.log(this.responseText);
                    response2.innerHTML = this.responseText;

                }
            }


            xhttp.open('GET', 'ajax/demo2.php?nom=Cliquot&prenom=Quentin&age=20');
            xhttp.send()
        }

        btn2.addEventListener('click', getUser);

        //=======================================================================================
        // Test 3
        //=======================================================================================

        const btn3 = document.querySelector('#btn3');
        const reponse3 = document.querySelector('#reponse3');

        function postFruits() {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    response3.innerHTML = this.responseText;

                }
            }


            xhttp.open('POST', 'ajax/demo2.php', true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send('fruit=banane&music=basse');


        }

        btn3.addEventListener('click', postFruits);

        //=======================================================================================
        // Test 4
        //=======================================================================================
        const btn4 = document.querySelector('#btn4');
        const reponse4 = document.querySelector('#reponse4');

        function getDog() {

            fetch('https://dog.ceo/api/breeds/image/random')
                .then(function(response) {
                    return response.json()
                })
                .then(function(data) {
                    console.log(data.message);
                    const img = `<img src="${data.message}" alt="photo de chien" width="400px">`;
                    response4.innerHTML = img

                })
                .catch(function(err) {
                    console.log(err);
                })

        }




        btn4.addEventListener('click', getDog);
    </script>

</body>

</html>