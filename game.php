<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="sokoni.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="JS/index.js"></script>
    <title>Sokoni</title>
</head>

<script>
    var matrix = [];
    var str = "ABCDEFGHIJ";
    var c=0;
    for(var i=0; i<3; i++){
        matrix[i] = new Array(3);
        for(var j=0; j<3; j++){
            matrix[i][j] = str[c];
            c++;
        }
    }

    var turn = 0;

    function gameover()
    {
        for (var i = 0; i < 3; i++)//Check for a win
        {
            if ((matrix[i][0] == matrix[i][1] && matrix[i][1] == matrix[i][2]) || (matrix[0][i] == matrix[1][i] && matrix[1][i] == matrix[2][i]) || (matrix[0][0] == matrix[1][1] && matrix[1][1] == matrix[2][2]) || (matrix[0][2] == matrix[1][1] && matrix[1][1] == matrix[2][0]))
            {
                //alert("turn ="+turn);
                if(turn){
                    alert("Player O has won! ");
                }
                else{
                    alert("Player X has won! ");
                }
                return;
            }
        }

        for (var i = 0; i < 3; i++)//Check for draw
        {
            for (var j = 0; j < 3; j++)
            {
                if (matrix[i][j] != 'X' && matrix[i][j] != 'O')
                {
                    return;
                }
            }
        }
        alert("It has ended in a draw! ");
    }


    function clicked(obj){
        if(turn == 0){
            matrix[obj.name][obj.value] = 'O';
            obj.innerHTML = matrix[obj.name][obj.value];
            turn = 1;
        }
        else{
            matrix[obj.name][obj.value] = 'X';
            obj.innerHTML = matrix[obj.name][obj.value];
            turn = 0;
        }
        gameover();


    }

    function reset(){
        alert("Good luck!");
        location.reload();
    }
    function displayrow(row){
        for(var col=0; col<3; col++){
            document.write('<button id="r'+row+'c'+col+'" type="button" onclick="clicked(this)" name="'+row+'" value="'+col+'">');
            if(matrix[row][col] != 'X' && matrix[row][col] != 'O'){
                document.write(' </button>');
            }
            else{
                document.write(matrix[row][col]+'</button>');
            }
        }

        document.write('<br>');
    }

    function displayboard(){
        for(var i=0; i<3; i++){
            displayrow(i);
        }
    }



</script>

<body>

<div class="top" style="height: 100px; color: white;">
    <div class="container">
        <h1><span>You are welcome to play Tic Tac Toe.</span></h1>
    </div>
</div>
<div class="container">
    <div class="row game_area">
        <p>NB: This is a 2 player version of Tic Tac created by Jimmy Mkude as coding practice. Have fun!</p>
        <button type="button" style="border-style: hidden; width: 200px; height: 100px; font-size: 16px;" onclick="reset();">Restart Game</button>
        <br><br>
        <div class="row">
            <script>
                displayboard();

            </script>
        </div>


    </div>
</div>

<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <p class="navbar-text pull-left">© 2016 Sokoni By Jimmy Mkude and Arnold Mutayoba
            <a href="http://mkude.com" target="_blank" >mkude.com</a>
        </p>

    </div>


</body>