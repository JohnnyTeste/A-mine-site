<html>
    <head>
        
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style-seja-fa.css">
        <title>IF</title>
        
        <script type="php">
        

            
            
        </script>
        

    </head>
    <body>
        <header>
            <ul>
                <li><a href="contatos.php">CONTATOS</a></li>
                <li><a href="index.php">HOME</a></li>
                <li><a href="seja-fa.php">SEJA FÃ</a></li>
            </ul>
        </header>
        <article>
            
            <h1>seja fã</h1>
            
            <form action="mail_send.php" method="post" enctype="text/plain">
                
                <span>Nome</span><input required type="text" name="name"><br>
                
                <span>Email</span><input required type="email" name="mail" ><br>
                
                <span>Seu artista favorito</span><select>
                    <option value="null"></option>
                    <option value="Braz">Pedro Braz</option>
                    <option value="Metal">Pedro Henrique</option>
                    <option value="Yan">Yan Teles</option>
                    <option value="all">Todos</option>
                </select><br>
                
                
                
                <input type="submit" name="submit">

                
                
            </form>
            

        </article>
    </body>
    
</html>