<!--
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    }

    .cuerpito {
    background-color: #f7f8fa;
    color: #333;
    }

    .contratacion {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
    padding: 5rem 8%;
    flex-wrap: wrap;
    position: relative;
    background-color: #f7f8fa;
    overflow: hidden; /* Evita que la mancha se desborde */
  }

  /* Mancha degradada localizada */
  .contratacion::before {
    content: "";
    position: absolute;
    top: -10px;
    left: 50px;
    width: 400px;
    height: 400px;
    background: radial-gradient(
      circle at center,
      rgba(255, 140, 80, 0.45) 0%,
      rgba(255, 140, 80, 0.25) 30%,
      rgba(255, 140, 80, 0.05) 70%,
      transparent 100%
    );
    filter: blur(50px);
    z-index: 0;
  }

  .texto, .imagen-contenedor {
    position: relative;
    z-index: 1; /* El contenido encima de la mancha */
  }


    .texto {
    flex: 1 1 400px;
    max-width: 600px;
    }

    .texto h1 {
    font-size: 2.8rem;
    font-weight: 700;
    color: #222;
    line-height: 1.2;
    margin-bottom: 1rem;
    }

    .texto p {
    color: #555;
    font-size: 1rem;
    line-height: 1.6;
    }

    .imagen-contenedor {
    position: relative;
    flex: 1 1 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .imagen-principal {
    width: 100%;
    max-width: 450px;
    border-radius: 1.5rem;
    box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
    }

    /* Círculos */
    .circulo {
    position: absolute;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-weight: 600;
    border-radius: 50%;
    text-align: center;
    width: 130px;
    height: 130px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .circulo p {
    font-size: 0.9rem;
    margin-top: 0.3rem;
    }

    .azul {
    background: radial-gradient(circle at top left, #003b9e, #1a56d900);
    left: 34px;
    top: 20%;
    }

    .naranja {
    background: radial-gradient(circle at top right, #ff6a00, #ff944d00);
    right: 47px;
    top: 20%;
    }

    .anaranjado {
    background: radial-gradient(circle at bottom, #ff8000, #ffb347);
    bottom: -85px;
    left: 50%;
    transform: translateX(-50%);
    }

    /* Responsividad */
    @media (max-width: 992px) {
    .contratacion {
        flex-direction: column;
        text-align: center;
    }

    .texto {
        max-width: 100%;
    }

    .imagen-contenedor {
        margin-top: 2rem;
    }

    .circulo {
        width: 100px;
        height: 100px;
        font-size: 0.8rem;
    }

    .naranja {
        right: 10px;
    }

    .azul {
        left: 10px;
    }

    .anaranjado {
        bottom: -20px;
    }
    }

    @media (max-width: 600px) {
    .texto h1 {
        font-size: 2rem;
    }
    }
</style>
<div class="cuerpito">
  <section class="contratacion">
    <div class="texto">
      <h1>Agilice su negocio con soluciones de contratación externa</h1>
      <p>
        Con nosotros, su organización proyecta una imagen de profesionalismo y compromiso con el bienestar de colaboradores y clientes. Transformamos la limpieza en una ventaja competitiva.
      </p>
    </div>

    <div class="imagen-contenedor">
      <img src="images/img/limp1.jpg" alt="Empleado atendiendo" class="imagen-principal">
      <div class="circulo azul">
        <span class="icono"><i class="fa-solid fa-user" style="font-size: 40px;"></i></span>
        <p>STAFF TEMPORAL</p>
      </div>
      <div class="circulo naranja">
        <span class="icono"><i class="fa-solid fa-magnifying-glass" style="font-size: 40px;"></i></span>
        <p>STAFF ESPECIALIZADO</p>
      </div>
      <div class="circulo anaranjado">
        <span class="icono"><i class="fa-solid fa-users" style="font-size: 40px;"></i></span>
        <p>STAFF PERMANENTE</p>
      </div>
    </div>
  </section>
</div>
-->

<!doctype html>

<style>
  :root {
    --font-family: "Poppins", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    --overlay-color: rgba(0, 0, 0, 0.5);
  }

  /* Reset básico */
  * { margin: 0; padding: 0; box-sizing: border-box; }


  /* 🔸 Banner principal */
  .banner-bpo {
    position: relative;
    width: 100vw;              /* ocupa todo el ancho de la ventana */
    height: 85vh;              /* altura flexible tipo banner */
    min-height: 400px;         /* altura mínima */
    max-height: 750px;         /* evita que se extienda demasiado */
    background: url('images/img/limp1.jpg') no-repeat center center;
    background-size: cover;    /* asegura que la imagen cubra todo */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background-position-y: 0;
  }

  /* capa semitransparente para contraste */
  .banner-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.35);
    z-index: 1;
  }

  /* contenido del texto */
  .banner-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: white;
    max-width: 1200px;
    padding: 2rem;
  }

  /* título principal */
  .banner-title {
    font-weight: 800;
    font-size: clamp(2rem, 6vw, 4rem);
    line-height: 1.1;
    margin-bottom: 1rem;
    color: #fff;
  }

  /* evitar quiebre extraño */
  .banner-title .nowrap {
    white-space: nowrap;
  }

  /* subtítulo */
  .banner-sub {
    font-weight: 300;
    font-size: clamp(1rem, 1.6vw, 1.25rem);
    opacity: 0.9;
    margin-bottom: 1.5rem;
  }

  /* divisor */
  .banner-divider {
    width: 60%;
    height: 2px;
    margin: 0 auto;
    background: rgba(255,255,255,0.5);
    border-radius: 2px;
  }

  /* 🔹 Móviles */
  @media (max-width: 768px) {
    .banner-bpo {
      height: 70vh;
      background-position: center 30%;
    }

    .banner-content {
      padding: 1.5rem;
    }

    .banner-title {
      font-size: clamp(1.8rem, 8vw, 3rem);
    }

    .banner-divider {
      width: 80%;
    }
  }

</style>
  <div class="banner-bpo">
    <div class="banner-overlay"></div>

    <div class="banner-content">
      <h1 class="banner-title">
        Agilice su negocio con soluciones de contratación externa
      </h1>

      <p class="banner-sub">
        Con nosotros, su organización proyecta una imagen de profesionalismo y compromiso con el bienestar de colaboradores y clientes. Transformamos la limpieza en una ventaja competitiva.
      </p>

      <div class="banner-divider"></div>
    </div>
  </div>
</html>
