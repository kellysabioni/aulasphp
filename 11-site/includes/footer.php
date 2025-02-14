        </main>
        
        <footer>
            <p>Site criado para o curso Téc. Informática para Internet</p>
    <?php 
        date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário
        // setlocale(LC_TIME, 'pt_BR.UTF-8');
        $dataHoraAtual = Date('d/M/Y H:i:s'); // Armazena a data e hora atual em uma variável
    ?>
    <p><span ><?=$dataHoraAtual; ?></span></p>
        </footer>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>