<section>
    <h3>FOR - Tabuada</h3>
    <p>Use o <code>for</code> para criar uma tabuada, escolha um número:</p>
    <form action="for.php" method="post">
        <input type="text" name="number" id="number" placeholder="Digite um número..." required>
        <input type="submit" value="OK">
    </form>
</section>
<section>
    <h3>WHILE</h3>
    <p>Use o <code>while</code> para conseguir o resultado da soma de 1 a 100.</p>
    <form action="while.php" method="post">
        <label for="soma">Vamos começar!</label>
        <input type="submit" value="OK">
    </form>
</section>
<section>
    <h3>WHILE - Somar números Pares</h3>
    <p>Use o <code>while</code> para contar os números pares de 1 até o número que deseja:</p>
    <form action="somapares.php" method="post">
        <input type="text" name="limit" id="limit" placeholder="Escolha o número que deseja">
        <input type="submit" value="CONTAR">
    </form>
</section>
<section>
    <h3>DO...WHILE</h3>
    <p>Usaremos <code>do...while</code> para a solicitação de um número par, caso seja digitado um impar, o progama irá pedir novamente o par.</p>
    <form action="dowhile.php" method="post">
        <label for="numeros">Clique no  botão abaixo para iniciar a verificação do número:</label>
        <input type="submit" value="OK">
    </form>
</section>