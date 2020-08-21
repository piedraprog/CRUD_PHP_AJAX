CREATE TABLE atletas (
    cedula_atleta int NOT NULL PRIMARY KEY,
    nacionalidad char(1) NOT NULL,
    fecha_nacimiento date NOT NULL,
    nombres varchar(25) NOT NULL,
    ape_materno varchar(15) NOT NULL,
    ape_paterno varchar(15) NOT NULL,
    apodo varchar(250) NOT NULL,
    cod_pais int NOT NULL,
    lugar_nacimiento varchar(250) NOT NULL,
    telefono varchar NOT NULL,
    dir_habitacion varchar(250) NOT NULL,
    estado_civil varchar(40) NOT NULL,
    activo_inactivo char(1) NOT NULL,
    observacion varchar(250) NOT NULL
  ) ;
  
  -- --------------------------------------------------------
  
  --
  -- Estructura de tabla para la tabla campeonato_atletas
  --
  
  CREATE TABLE campeonato_atletas (
    cod_campeonato int NOT NULL PRIMARY KEY,
    cedula_atleta int NOT NULL,
    anio_campeonato date NOT NULL,
    desc_campeonato varchar(250) NOT NULL
  ) ;
  
  -- --------------------------------------------------------
  
  --
  -- Estructura de tabla para la tabla clasificacion_deportes
  --
  
  CREATE TABLE clasificacion_deportes (
    cod_clasifi_deporte int NOT NULL PRIMARY KEY,
    cod_tipo_deporte int NOT NULL,
    nom_clasi_deporte varchar(250) NOT NULL
  ) ;
  
  -- --------------------------------------------------------
  
  --
  -- Estructura de tabla para la tabla ciudad
  --
  
  CREATE TABLE ciudad (
    cod_ciudad int NOT NULL PRIMARY KEY,
    cod_pais int NOT NULL,
    nombre_ciudad varchar(40) NOT NULL
  ) ;
  
  -- --------------------------------------------------------
  
  --
  -- Estructura de tabla para la tabla cursos_realizados
  --
  
  CREATE TABLE cursos_realizados (
    cod_cursos int NOT NULL PRIMARY KEY,
    cedula_atleta int NOT NULL,
    desc_curso varchar(250) NOT NULL
  ) ;
  
  -- --------------------------------------------------------
  
  --
  -- Estructura de tabla para la tabla deportes
  --
  
  CREATE TABLE deportes (
    cod_deporte int NOT NULL PRIMARY KEY,
    nom_deporte varchar(250) NOT NULL
  ) ;
  
  -- --------------------------------------------------------
  
  --
  -- Estructura de tabla para la tabla deporte_atleta
  --
  
  CREATE TABLE deporte_atleta (
    cedula_atleta int NOT NULL,
    cod_deporte int NOT NULL,
    cod_tipo_deporte int NOT NULL
  ) ;
  
  -- --------------------------------------------------------
  
  --
  -- Estructura de tabla para la tabla estudios_realizados
  --
  
  CREATE TABLE estudios_realizados (
    cod_estudio int NOT NULL PRIMARY KEY,
    cedula_atleta int NOT NULL,
    desc_estudio varchar(250) NOT NULL
  ) ;
  
  -- --------------------------------------------------------
  
  --
  -- Estructura de tabla para la tabla fe_de_vida
  --
  
  CREATE TABLE fe_de_vida (
    cod_fe_de_vida int NOT NULL PRIMARY KEY,
    cedula_atleta int NOT NULL,
    nom_regist_civil varchar(250) NOT NULL,
    cedula_regis_civil int NOT NULL,
    parroquia varchar(100) NOT NULL,
    resolucion_nro varchar(20) NOT NULL,
    gaceta_nro varchar(20) NOT NULL,
    fecha_gaceta date NOT NULL,
    fecha_fe_de_vida date NOT NULL,
    dereccion_atleta varchar(250) NOT NULL,
    observacion varchar(250) NOT NULL
  ) ;
  
  -- --------------------------------------------------------
  
  --
  -- Estructura de tabla para la tabla nivel_deportivo
  --
  
  CREATE TABLE nivel_deportivo (
    cod_nivel_deportivo int NOT NULL,
    cedula_atleta int NOT NULL,
    desc_nivel_deportivo varchar(250) NOT NULL
  ) ;
  
  -- --------------------------------------------------------
  
  --
  -- Estructura de tabla para la tabla paises
  --
  
  CREATE TABLE paises (
    cod_pais int NOT NULL PRIMARY KEY,
    nom_pais varchar(40) NOT NULL
  ) ;
  
  -- --------------------------------------------------------
  
  --
  -- Estructura de tabla para la tabla tipos_deportes
  --
  
  CREATE TABLE tipos_deportes (
    cod_deporte int NOT NULL,
    cod_tipo_deporte int NOT NULL PRIMARY KEY,
    cod_clasi_deporte int NOT NULL,
    nom_tipo_deporte varchar(250) NOT NULL
  ) ;
  
  -- --------------------------------------------------------
  
  --
  -- Estructura de tabla para la tabla trabajos_realizados
  --
  
  CREATE TABLE trabajos_realizados (
    cod_trabajo int NOT NULL,
    cedula_atleta int NOT NULL,
    desc_trabajo varchar(250) NOT NULL
  ) ;
  
  ------------------------------------------------------------------------------------
  ------------------------------------------------------------------------------------  
  --
  -- Filtros para la tabla campeonato_atletas
  --
  ALTER TABLE campeonato_atletas
    ADD CONSTRAINT campeonato_atletas_fk FOREIGN KEY (cedula_atleta)
    REFERENCES atletas (cedula_atleta) MATCH SIMPLE
    ON UPDATE CASCADE
    ON DELETE CASCADE
    NOT VALID;
  CREATE INDEX fki_campeonato_atletas
      ON campeonato_atletas(cedula_atleta);
  --
  -- Filtros para la tabla cursos_realizados
  --
  ALTER TABLE cursos_realizados
    ADD CONSTRAINT cursos_realizados_ibfk_1 FOREIGN KEY (cedula_atleta) 
    REFERENCES atletas (cedula_atleta) MATCH SIMPLE 
    ON UPDATE CASCADE
    ON DELETE CASCADE 
    NOT VALID;
  CREATE INDEX fki_cursos_realizados
      ON cursos_realizados(cedula_atleta);
   --
  -- Filtros para la tabla deporte_atleta
  --
  ALTER TABLE deporte_atleta
    ADD CONSTRAINT deporte_atleta_ibfk_1 FOREIGN KEY (cedula_atleta) 
    REFERENCES atletas (cedula_atleta) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE
    NOT VALID;
  CREATE INDEX fki_deporte_atleta
    ON deporte_atleta(cedula_atleta); 
  --
  -- Filtros para la tabla estudios_realizados
  --
  ALTER TABLE estudios_realizados
    ADD CONSTRAINT estudios_realizados_ibfk_1 FOREIGN KEY (cedula_atleta) 
    REFERENCES atletas (cedula_atleta)
    ON DELETE CASCADE 
    ON UPDATE CASCADE
    NOT VALID;
  CREATE INDEX fki_estudios_realizados
    ON estudios_realizados(cedula_atleta);
  --
  -- Filtros para la tabla fe_de_vida
  --
  ALTER TABLE fe_de_vida
    ADD CONSTRAINT fe_de_vida_ibfk_1 FOREIGN KEY (cedula_atleta) 
    REFERENCES atletas (cedula_atleta) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE
    NOT VALID;
  CREATE INDEX fki_fe_de_vida
    ON fe_de_vida(cedula_atleta);
  --
  -- Filtros para la tabla nivel_deportivo
  --
  ALTER TABLE nivel_deportivo
    ADD CONSTRAINT nivel_deportivo_ibfk_1 FOREIGN KEY (cedula_atleta) 
    REFERENCES atletas (cedula_atleta) 
    ON DELETE CASCADE
    ON UPDATE CASCADE
    NOT VALID;
  CREATE INDEX fki_nivel_deportivo
    ON nivel_deportivo(cedula_atleta); 

  --
  -- Filtros para la tabla trabajos_realizados
  --
  ALTER TABLE trabajos_realizados
    ADD CONSTRAINT trabajos_realizados_ibfk_1 FOREIGN KEY (cedula_atleta) 
    REFERENCES atletas (cedula_atleta) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE
    NOT VALID;
  CREATE INDEX fki_trabajos_realizados
    ON trabajos_realizados(cedula_atleta);

  --
  -- Filtros para la tabla ciudad
  -- 
  ALTER TABLE ciudad
    ADD CONSTRAINT ciudad_ibfk_1 FOREIGN KEY (cod_pais) 
    REFERENCES paises (cod_pais) MATCH SIMPLE 
    ON UPDATE CASCADE
    ON DELETE CASCADE 
    NOT VALID;
  CREATE INDEX fki_ciudad
      ON ciudad(cod_pais);

  --ALTER TABLE atletas
    --ADD CONSTRAINT cod_pais (cod_pais);
    ALTER TABLE atletas
    ADD FOREIGN KEY (cod_pais)
    REFERENCES paises (cod_pais) MATCH SIMPLE
    ON UPDATE CASCADE
    ON DELETE CASCADE
    NOT VALID;
  CREATE INDEX fk_codpaises
    ON atletas(cod_pais);

  --- SECCION DE TABLAS DETALLES DE DEPORTES   
  --
  -- Filtros para la tabla deportes
  --
  ALTER TABLE tipos_deportes
    ADD UNIQUE (cod_deporte);

    ALTER TABLE deportes
    ADD CONSTRAINT fk_deportes FOREIGN KEY (cod_deporte)
    REFERENCES tipos_deportes (cod_deporte) MATCH SIMPLE
    ON UPDATE CASCADE
    ON DELETE CASCADE
    NOT VALID;
CREATE INDEX fki_fk_deportes
    ON deportes(cod_deporte);

  --
  -- Filtros para la tabla tipos_deportes
  --

  ALTER TABLE clasificacion_deportes
    ADD CONSTRAINT cod_tipo_deporte UNIQUE (cod_tipo_deporte);


    ALTER TABLE tipos_deportes
    ADD CONSTRAINT fk_tipos_deportes FOREIGN KEY (cod_tipo_deporte)
    REFERENCES clasificacion_deportes (cod_tipo_deporte) MATCH SIMPLE
    ON UPDATE CASCADE
    ON DELETE CASCADE
    NOT VALID;
CREATE INDEX fki_fk_tipos_deportes
    ON tipos_deportes(cod_tipo_deporte);