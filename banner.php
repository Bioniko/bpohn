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
  background: url('images/img/limp2.jpg') no-repeat center center;
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
        Descubre Oportunidades<br />
        <span class="nowrap">Laborales Increíbles</span> con BPO
      </h1>

      <p class="banner-sub">
        Si te apasiona el trabajo en equipo, el crecimiento profesional y la excelencia en el servicio, ¡Queremos conocerte!
      </p>

      <div class="banner-divider"></div>
    </div>
  </div>
</html>
