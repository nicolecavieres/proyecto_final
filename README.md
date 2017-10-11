# Trabajo Final
## Introducción

Este proyecto consta de la realización de un nuevo diseño y desarrollo del sitio web para el Jardín de Niños Semillita. 
En la actualidad el Jardín posee un página web, sin embargo, ésta carece de una buena arquitectura de la información y tiene un diseño mal jerarquizado y anticuado, además, es estática, por lo que en celulares u otros dispositivos móviles es muy difícil navegar en ella. 

## Objetivo Principal
El objetivo principal de este proyecto es realizar un sitio administrable, en el cual se puedan subir noticias y actividades periódicamente, que sea responsive y posea una buena arquitectura de la información.

## Descripción
Esta web posee las siguientes páginas:

* **Index:**
	Página principal, es la página en la que se encuentran las principales secciones de la web, se accede a ellas a través del menú de navegación o haciendo *scroll*. 
Estas secciones son:
	*Nosotros
	*Información
	*Noticias
* **Página Nosotros:**
	A esta página se accede a través de la sección *Nosotros* ubicada en el index, o por medio de los menú de navegación. En ella encontramos una descripción completa del Jardín, además de la historia y el reglamento del mismo.

* **Página Información:**
	Se accede a ella a través de la sección de *Información* en el index. En esta página abarcamos tres temas, colación saludable, útiles escolares y el manual de prevención del maltrato infantil.

* **Página feriados:**
	Se accede a ella a través de la sección de *Noticias*. En ella vemos los días feriados de cada año, son generados a través de una *Api REST*.

* **Página Noticias:** 
	Se accede a ella a través de la sección de *Noticias* en el index, mediante el link "Ver más noticias". Esta sección utiliza las entradas por defecto de Wordpress.

* **Páginas de cada noticia:**
	Cada noticia posee un *permalink* que lleva a una página diferente donde se encuentra cada noticia.

En cada página encontramos el header en el que vemos un menú administrable donde se pueden agregar nuevos ítems o quitarlos. Al final de ellas tenemos la sección de contacto, donde vemos toda información con la que las personas pueden contactarse con el Jardín Infantil, incluido un mapa y un formulario de contacto.


## Datos de despliegue
Este proyecto fue realizado en base a la plantilla *wp_boilerplate* de Desafío Latam.
En la raíz se encuentra la carpeta completa con la instalación de wordpress incluida, además de la base de datos exportada.
* **Username**: nicole61192
* **Clave**: claveproyectofinal
