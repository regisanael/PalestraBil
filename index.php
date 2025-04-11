<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Start Inatel 2025 - Evento de Inovação e Tecnologia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="estilos.css"> <!-- Arquivo CSS personalizado -->
</head>
<body>

  <header class="bg-primary text-white p-4">
    <div class="container">
      <h1 class="mb-0">Start Inatel 2025</h1>
    </div>
  </header>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Inatel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#palestrantes">Palestrantes</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container my-5">
    
    <section id="sobre" class="mb-5">
      <article>
        <h2 class="mb-3">Sobre o Evento</h2>
        <p class="lead">O Start Inatel 2025 é o maior evento de inovação e tecnologia do sul de Minas Gerais.</p>
        <p><strong>Data:</strong> 15 a 17 de maio de 2025</p>
        <p><strong>Local:</strong> Instituto Nacional de Telecomunicações - Inatel, Santa Rita do Sapucaí - MG</p>
        <p>O evento reúne estudantes, profissionais e empresas para discutir os rumos da tecnologia e promover networking de qualidade.</p>
      </article>
    </section>

    <section id="palestrantes" class="mb-5">
      <article>
        <h2 class="mb-3">Palestrantes Confirmados</h2>
        <ul class="list-group">
          <?php
            $palestrantes = [
              ['nome' => 'Ana Silva', 'confirmado' => true],
              ['nome' => 'Bruno Santos', 'confirmado' => false],
              ['nome' => 'Carla Oliveira', 'confirmado' => true],
              ['nome' => 'Daniel Costa', 'confirmado' => false],
            ];

            foreach ($palestrantes as $palestrante) {
              echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
              echo $palestrante['nome'];
              if (!$palestrante['confirmado']) {
                echo '<span class="badge bg-warning text-dark">Em breve!</span>';
              }
              echo '</li>';
            }
          ?>
        </ul>
      </article>
    </section>

  </main>

  <footer id="contato" class="bg-light text-center text-muted py-4">
    <div class="container">
      <p class="mb-1">&copy; 2025 Start Inatel. Todos os direitos reservados.</p>
      <p class="mb-0">Contato: eventos@inatel.br</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
