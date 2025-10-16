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
  padding: 4rem 8%;
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
