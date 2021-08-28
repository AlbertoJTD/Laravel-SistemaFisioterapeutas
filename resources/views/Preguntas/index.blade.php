@extends('layouts.plantilla')

@section('Titulo','Fisioterapeutas')

@section('Contenido') 

<div class="row justify-content-center">
    <div class="col-8">
        <div class="accordion mt-4" id="accordionExample">
		  <div class="accordion-item">
		    <h2 class="accordion-header" id="headingOne">
		      <button class="mitexto accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		        ¿Cómo visualizar ejercicios por categoria?
		      </button>
		    </h2>
		    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
		      <div class="mitexto accordion-body">
		        <strong>¿Qué hacer?</strong><br> Si lo que quieres es visualizar ejercicios pertinentes a una categoria en especifico, debes situarte en la pantalla de inicio que puedes aprecia pulsando el boton Inicio que tiene un icono de home.
		      </div>
		    </div>
		  </div>
		  <div class="accordion-item">
		    <h2 class="accordion-header" id="headingTwo">
		      <button class="mitexto accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		        ¿Existe alguna manera de obtener más ejercicios o ejercicios que se adecuen a mi persona?
		      </button>
		    </h2>
		    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
		      <div class="mitexto accordion-body">
		        <strong>Proximamente.</strong><br>Nos encontramos trabajando para realizar el enlistamiento de fisioterapeutas, quienes se encargaran de realizar y cargar más ejercicios, algunos de ellos seran visibles para todos los usuarios pero muchos otros no, esto es debido a que la manera de remuneración de los fisioterapeutas es un pago que obtendran de las personas que realicen una suscripción al sistema, la misma no será solo para tener mas ejercicios sino que se obtendra el contacto directo con un fisioterapeuta para que este realice el seguimiento del usuario respecto a sus ejercicios.
		      </div>
		    </div>
		  </div>
		  <div class="accordion-item">
		    <h2 class="accordion-header" id="headingThree">
		      <button class="mitexto accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		       ¿Existe alguna de hacer crecer los textos, el problema es que tengo problemas de vision y siento que algunos de los textos son muy pequeños?
		      </button>
		    </h2>
		    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
		      <div class="mitexto accordion-body">
		        <strong>Efectivamente.</strong><br> Si dirige su atención a la parte superior a la parte superior de cualquiera de nuestras pantallas se dará cuenta de que existen 3 botones: Disminuir, Aumentar y Restablecer, cada uno hace respectivamente lo que dice, el boton de Aumentar puede alcanzar un numero de 21, si la problematica persiste con más usuarios nos veremos en la necesidad de aumentar el tamaño, gracios por la pregunta.

		        It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
		      </div>
		    </div>
		  </div>
		  <div class="accordion-item">
		    <h2 class="accordion-header" id="headingFour">
		      <button class="mitexto accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		        Cuando estoy en alguno de los lugares donde meto información, ¿Cómo puedo ver en que recuadro me encuentro?
		      </button>
		    </h2>
		    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
		      <div class="mitexto accordion-body">
		        <strong>Para ello.</strong><br> Seleccione alguno de los campos y vera como este se ilumina de un tenue color azul, al mismo tiempo puede saltar entre campo y campo con presionar la tecla tab (tabulador/tabulación).
		      </div>
		    </div>
		  </div>
	

		</div>
            </div>
        </div>
        
@endsection


