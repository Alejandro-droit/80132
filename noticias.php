<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias - IE Néstor Gastañadui Sánchez</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
    :root {
  --azul-noche: #1a237e;
  --azul-noche-claro: #534bae;
  --azul-noche-oscuro: #000051;
  --color-maiz: #fff176;
  --color-maiz-oscuro: #ffd54f;
  --color-maiz-claro: #ffffa8;
}

body {
  font-family: 'Roboto', sans-serif;
  color: #333;
  line-height: 1.6;
}

/* Navbar */
.navbar {
  background-color: var(--azul-noche) !important;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.navbar-brand,
.navbar-brand span {
  color: white !important;
  font-family: 'Noto Serif', serif;
  font-weight: 700;
}

.nav-link {
  color: white !important;
  font-weight: 500;
  transition: all 0.3s ease;
}

.nav-link:hover,
.nav-link:focus {
  color: var(--color-maiz) !important;
}

.nav-link.active {
  color: var(--color-maiz) !important;
  font-weight: 700;
}

.dropdown-menu {
  background-color: var(--azul-noche);
  border: none;
}

.dropdown-item {
  color: white !important;
}

.dropdown-item:hover {
  background-color: var(--azul-noche-claro);
  color: var(--color-maiz) !important;
}

/* Carousel */
.carousel-container {
  position: relative;
}

.welcome-message {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
  z-index: 10;
  background-color: rgba(26, 35, 126, 0.7);
  padding: 20px;
  border-radius: 8px;
}

.welcome-message h2 {
  font-family: 'Noto Serif', serif;
  color: var(--color-maiz);
  font-weight: 700;
}

.carousel-item img {
  height: 500px;
  object-fit: cover;
  filter: brightness(0.7);
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: var(--azul-noche);
  padding: 20px;
  border-radius: 50%;
}

/* Cards */
.card {
  border: none;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
  margin-bottom: 20px;
}

.card:hover {
  transform: translateY(-5px);
}

.card-title {
  color: var(--azul-noche);
  font-family: 'Noto Serif', serif;
}

.card-img-top {
  height: 200px;
  object-fit: cover;
}

/* Section headings */
h3 {
  color: var(--azul-noche);
  font-family: 'Noto Serif', serif;
  font-weight: 700;
  margin-bottom: 30px;
  position: relative;
  padding-bottom: 10px;
}

h3:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
  height: 3px;
  background-color: var(--color-maiz);
}

/* Footer */
.site-footer {
  background-color: var(--azul-noche);
  color: white;
  padding: 20px 0;
  margin-top: 50px;
}

/* Buttons */
.btn-primary {
  background-color: var(--azul-noche);
  border-color: var(--azul-noche);
}

.btn-primary:hover {
  background-color: var(--azul-noche-oscuro);
  border-color: var(--azul-noche-oscuro);
}

.btn-outline-primary {
  color: var(--azul-noche);
  border-color: var(--azul-noche);
}

.btn-outline-primary:hover {
  background-color: var(--azul-noche);
  border-color: var(--azul-noche);
}

/* Utility classes */
.bg-azul {
  background-color: var(--azul-noche);
}

.text-azul {
  color: var(--azul-noche);
}

.bg-maiz {
  background-color: var(--color-maiz);
}

.text-maiz {
  color: var(--color-maiz);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .welcome-message {
    width: 90%;
    padding: 15px;
  }
  
  .welcome-message h2 {
    font-size: 1.5rem;
  }
  
  .carousel-item img {
    height: 300px;
  }
}

/* FOOTER STYLES */
footer.bg-dark {
  background-color: var(--azul-noche) !important;
  color: white;
  font-family: 'Roboto', sans-serif;
}

footer h5 {
  font-family: 'Noto Serif', serif;
  font-weight: 700;
  color: var(--color-maiz);
  font-size: 1.2rem;
  position: relative;
  padding-bottom: 10px;
  margin-bottom: 20px;
}

footer h5:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 50px;
  height: 2px;
  background-color: var(--color-maiz);
}

footer .text-white-50 {
  color: rgba(255, 255, 255, 0.8) !important;
}

/* Social Icons */
.social-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  background-color: rgba(255, 255, 255, 0.1);
  color: white !important;
  border-radius: 50%;
  transition: all 0.3s ease;
}

.social-icon:hover {
  background-color: var(--color-maiz);
  color: var(--azul-noche) !important;
  transform: translateY(-3px);
}

.social-icon i {
  font-size: 1rem;
}

/* Lists */
footer ul.list-unstyled li {
  margin-bottom: 10px;
  transition: all 0.3s ease;
}

footer ul.list-unstyled li:hover {
  transform: translateX(5px);
}

footer ul.list-unstyled li a {
  transition: color 0.3s ease;
}

footer ul.list-unstyled li a:hover {
  color: var(--color-maiz) !important;
  text-decoration: none !important;
}

/* Form Styles */
footer .form-control {
  background-color: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.2);
  color: white;
  border-radius: 4px;
}

footer .form-control::placeholder {
  color: rgba(255, 255, 255, 0.6);
}

footer .form-control:focus {
  background-color: rgba(255, 255, 255, 0.2);
  border-color: var(--color-maiz);
  color: white;
  box-shadow: 0 0 0 0.25rem rgba(255, 241, 118, 0.25);
}

footer .btn-primary {
  background-color: var(--color-maiz);
  border-color: var(--color-maiz);
  color: var(--azul-noche);
  font-weight: 500;
  transition: all 0.3s ease;
}

footer .btn-primary:hover {
  background-color: var(--color-maiz-oscuro);
  border-color: var(--color-maiz-oscuro);
  transform: translateY(-2px);
}

/* Payment/Certification Icons */
footer .fa-2x {
  font-size: 1.75rem;
  opacity: 0.8;
  transition: all 0.3s ease;
}

footer .fa-2x:hover {
  opacity: 1;
  color: var(--color-maiz) !important;
}

footer img {
  transition: all 0.3s ease;
  filter: grayscale(30%) brightness(0.8);
}

footer img:hover {
  filter: grayscale(0%) brightness(1);
  transform: scale(1.05);
}

/* Divider */
footer hr.bg-secondary {
  background-color: rgba(255, 241, 118, 0.3) !important;
  height: 1px;
}

/* Copyright Section */
footer .text-primary {
  color: var(--color-maiz) !important;
}

footer a.text-decoration-none:hover {
  text-decoration: underline !important;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  footer .text-center.text-md-start, 
  footer .text-center.text-md-end {
    text-align: center !important;
  }
  
  footer h5 {
    margin-top: 20px;
  }
  
  footer .social-icon {
    margin-bottom: 10px;
  }
}
  </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <a class="navbar-brand me-0" href="index.php">
                    <img src="img/logo college.png" alt="Logo IE Néstor Gastañadui Sánchez" width="100" height="100">
                    <span class="d-none d-md-inline">IE Néstor Gastañadui Sánchez</span>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link px-3 active" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="nosotros.php">Nuestra Institución</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown">Plana Docente</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="docentePrimaria.php">Primaria</a></li>
                            <li><a class="dropdown-item" href="docenteSecundaria.php">Secundaria</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown">Zona Estudiantil</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="horarioPrimaria.php">Horarios Primaria</a></li>
                            <li><a class="dropdown-item" href="horarioSecundaria.php">Horarios Secundaria</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link px-3" href="padres.php">Atención a Padres</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="noticias.php">Noticias</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown">Otros</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="galeria.php">Galería</a></li>
                            <li><a class="dropdown-item" href="periodico.php">Periódico Mural</a></li>
                            <li><a class="dropdown-item" href="proyectos.php">Proyectos Escolares</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-flex align-items-center">
                <img src="img/logo JEC.png" alt="Logo JEC" width="100" height="100">
            </div>
        </div>
    </nav>

    <section class="container mt-5 mb-5">
        <h2 class="text-center text-primary mb-4">Noticias y Eventos</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/noticia1.jpg" class="card-img-top" alt="Noticia 1">
                    <div class="card-body">
                        <h5 class="card-title">Inicio del Año Escolar</h5>
                        <p class="card-text">Damos la bienvenida a todos nuestros estudiantes a un nuevo año de aprendizaje y crecimiento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/noticia2.jpg" class="card-img-top" alt="Noticia 2">
                    <div class="card-body">
                        <h5 class="card-title">Jornada de Limpieza Escolar</h5>
                        <p class="card-text">Docentes, padres y estudiantes participaron en una jornada de limpieza y embellecimiento del colegio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="img/noticia3.jpg" class="card-img-top" alt="Noticia 3">
                    <div class="card-body">
                        <h5 class="card-title">Taller de Habilidades Blandas</h5>
                        <p class="card-text">Nuestros estudiantes fortalecen sus capacidades emocionales y de liderazgo a través de talleres interactivos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5 bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4 mb-md-0">
        <h5 class="text-white mb-4">IE Néstor Gastañadui Sánchez</h5>
        <p class="text-white-50">
          Formando estudiantes con valores, compromiso y excelencia educativa en Shiracmaca.
        </p>
        <div class="mt-4">
          <a href="https://facebook.com/IENestorGastanadui" class="social-icon me-3" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://instagram.com/IENestorGastanadui" class="social-icon me-3" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://youtube.com/IENestorGastanadui" class="social-icon me-3" target="_blank">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="mailto:contacto@ienestorgastanadui.edu.pe" class="social-icon">
            <i class="fas fa-envelope"></i>
          </a>
        </div>
        <div class="mt-3">
          <p class="text-white-50 mb-1">
            <i class="fas fa-map-marker-alt me-2"></i> Av. Principal s/n, Shiracmaca
          </p>
          <p class="text-white-50 mb-1">
            <i class="fas fa-phone me-2"></i> (076) 123456
          </p>
          <p class="text-white-50">
            <i class="fas fa-clock me-2"></i> Lunes a Viernes: 7:30 am - 3:30 pm
          </p>
        </div>
      </div>

      <div class="col-md-2 mb-4 mb-md-0">
        <h5 class="text-white mb-4">Enlaces Rápidos</h5>
        <ul class="list-unstyled">
          <li class="mb-2">
            <a href="index.php" class="text-white text-decoration-none">Inicio</a>
          </li>
          <li class="mb-2">
            <a href="nosotros.php" class="text-white-50 text-decoration-none">Nuestra Institución</a>
          </li>
          <li class="mb-2">
            <a href="docentePrimaria.php" class="text-white-50 text-decoration-none">Docentes Primaria</a>
          </li>
          <li class="mb-2">
            <a href="docenteSecundaria.php" class="text-white-50 text-decoration-none">Docentes Secundaria</a>
          </li>
          <li class="mb-2">
            <a href="noticias.php" class="text-white-50 text-decoration-none">Noticias</a>
          </li>
        </ul>
      </div>

      <div class="col-md-3 mb-4 mb-md-0">
        <h5 class="text-white mb-4">Nuestros Servicios</h5>
        <ul class="list-unstyled">
          <li class="mb-2">
            <i class="fas fa-graduation-cap text-primary me-2"></i>
            <a href="#" class="text-white-50 text-decoration-none">Educación Primaria</a>
          </li>
          <li class="mb-2">
            <i class="fas fa-user-graduate text-primary me-2"></i>
            <a href="#" class="text-white-50 text-decoration-none">Educación Secundaria</a>
          </li>
          <li class="mb-2">
            <i class="fas fa-futbol text-primary me-2"></i>
            <a href="#" class="text-white-50 text-decoration-none">Actividades Deportivas</a>
          </li>
          <li class="mb-2">
            <i class="fas fa-music text-primary me-2"></i>
            <a href="#" class="text-white-50 text-decoration-none">Talleres Culturales</a>
          </li>
        </ul>
      </div>

      <div class="col-md-3">
        
        
          <h5 class="text-white mb-4">Certificaciones</h5>
          <div class="d-flex flex-wrap align-items-center">
            <img src="img/logo_JEC.png" alt="JEC" width="50" class="me-2 mb-2">
            <img src="img/logo_Minedu.png" alt="MINEDU" width="50" class="me-2 mb-2">
            <img src="img/logo_escuela_segura.png" alt="Escuela Segura" width="50" class="mb-2">
          </div>
        
      </div>
    </div>

    <hr class="my-4 bg-secondary" />

    <div class="row">
      <div class="col-md-6 text-center text-md-start">
        <p class="mb-0 text-white-50">
          &copy; 2025 IE Néstor Gastañadui Sánchez - Shiracmaca. Todos los derechos reservados.
        </p>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <p class="mb-0 text-white-50">
          Diseñado por <a href="#" class="text-primary text-decoration-none">Área de Tecnología</a>
        </p>
      </div>
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>