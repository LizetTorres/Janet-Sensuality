<?php include("pagjanet/index.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <style>
        html *{
   margin: 0.5; 
   padding: o.5;
   font-family: 'Playfair Display', serif;
  }
  html{
    scroll-behavior: smooth;
  }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fdf2f2;
            color: #333;
        }
        header {
            background-color:   #ff69b4;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
       
        .logo {
            font-size: 2em;
            font-weight: bold;
        }
        nav {
            background-color: #ffb6c1;
            padding: 0.5em;
            position: fixed;
            width: 100%;
            top: 70px;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        nav ul li {
            margin: 0 1em;
        }
        nav ul li a {
            color: #333;
            text-decoration: none;
        }
        .register-btn {
            background-color: #ff1493;
            color: white;
            padding: 0.5em 1em;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .contact-btn {
            background-color: #ff1493;
            color: white;
            padding: 0.5em 1em;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .register-btn:hover {
            background-color: #ff69b4;
        }
        main {
            max-width: 1200px;
            margin: 120px auto 0;
            padding: 2em;
        }
        .section {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2em;
        }
        .hero {
            text-align: center;
            margin-bottom: 2em;
        }
 

        .hero h1 {
            font-size: 2.5em;
            color: #ff69b4;
        }
        .catalog {
            display: -moz-grid-group;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2em;
        }
        .product {
            background-color: white;
            border-radius: 8px;
            padding: 1em;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .product img {
            max-width: 50%;
            height: auto;
            border-radius: 4px;
        }
        #contacto {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin: 0 auto;
        }
        input, button {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #ff69b4;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff1493;
        }
        #message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            margin-top: 2em;
        }
        /** Seccion de productos **/
  
  .wrap-productos-section{
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
  }
  
  .productos-section{
    padding: 1rem;
  }
  
  .productos-section img{
    width: 230px;
    height: 230px;
  }
  
  /** Segunda columna Section **/
  
  .wrap-two-column{
    display: grid;
    grid-template-columns: 1fr 1fr;
    max-width: 900px;
    margin: 0 auto;


}
  .wrap-img_two-column{
    padding: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-flow: column;
  }
  
  .wrap-text-column h3{
    padding: 2rem 0;
  }
  
  .wrap-text-column p{
    padding-bottom: 1rem;
  }
    </style>
</head>
<body>
    <header>
        <div class="logo"> Janet Sensuality</div>
    </header>
    <nav>  
    
  <ul>
            <a href="index.php" class="cat-a">Regresar</a> 
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#catalogo">Catálogo</a></li>
            <li><a href="#contacto">Contacto</a></li>
         
        </ul>
       
    </nav>

    <main>
  
  
        <section id="inicio" class="section hero">
            <h1>Descubre tu belleza interior</h1>
            <h2>Explora nuestra colección de lencería elegante y cómoda</h2>
        </section>
        <section id="catalogo" class="section catalog">    
      <section class="section productos-section">
        <div class="wrap-title-section">
          <h2>Categorías de Productos</h2>
        </div>
    
        <div class="wrap-productos-section">
          <a href="" class="productos-section">
            <img src="img/sosten1.jpg" alt="">
              <p>Sujetadores</p>
            </img>
          </a>
          <a href="" class="productos-section">
            <img src="img/bikini.jpg" alt="">
              <p>Bragas</p>
            </img>
          </a>
          <a href="" class="productos-section">
            <img src="img/Imagen1.jpg" alt="">
              <p>Coordinados</p>
            </img>
          </a>
          <a href="" class="productos-section">
            <img src="img/deportiva.jpg" alt="">
              <p>Deportivos</p>
            </img>
          </a>
          <a href="" class="productos-section">
            <img src="img/IMG-20241014-WA0006.jpg" alt="">
              <p>Sexy</p>
            </img>
          </a>
          <a href="" class="productos-section">
            <img src="img/IMG-20241014-WA0004.jpg" alt="">
              <p>Sensuales</p>
            </img>
          </a>
          </main>
        </div>
      </section>
    
        <section id="contacto" class="section">
            <h1>Contáctanos</h1>
            <h2>Estamos aquí para ayudarte. No dudes en ponerte en contacto con nosotros.</h2>
            <h2>Email: lize2869@gmail.com</h2>
            <h2>Teléfono: +52 38 6100 4078</h2>
        </section>
       
    </main>
    <footer>
        <p>&copy; 2024 Janet Sensuality. Todos los derechos reservados.</p>
    </footer>

 
</body>
</html>