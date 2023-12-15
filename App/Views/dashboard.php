<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="config/materialize/css/materialize.min.css"></!-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Dashboard</title>
    <style>
        body,
        html {
           
            margin: 0;
        }

        section {
            min-height: 100%;
        }

        body {
        
            background-image: linear-gradient(160deg, #f1f1f1 0%, #24388b 70%);
        }

        .custom-form-group {
            margin-right: 28rem; /* Ajuste conforme necessário */
        }
        .custom-checkbox {
            margin-right: 25rem;
        }
        .custom-move{
            margin-left: 9rem;
        }
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
              body {
         
          color: #5a5a5a;
        }
        .carousel {
          margin-bottom: 4rem;
        }
        .carousel-caption {
          bottom: 3rem;
          z-index: 10;
        }
        .carousel-item {
          height: 32rem;
        }
        .carousel-item > img {
          position: absolute;
          top: 0;
          left: 0;
          min-width: 100%;
          height: 32rem;
        }
        .marketing .col-lg-4 {
          margin-bottom: 1.5rem;
          text-align: center;
        }
        .marketing h2 {
          font-weight: 400;
        }
        .marketing .col-lg-4 p {
          margin-right: .75rem;
          margin-left: .75rem;
        }
        .featurette-divider {
          margin: 5rem 0; 
        }
        .featurette-heading {
          font-weight: 300;
          line-height: 1;
          letter-spacing: -.05rem;
        }
        @media (min-width: 40em) {
          /* Bump up size of carousel content */
          .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
          }
          .featurette-heading {
            font-size: 50px;
          }
        }
        @media (min-width: 62em) {
          .featurette-heading {
            margin-top: 7rem;
          }
        }
        

    </style>


</head>
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #ffffff;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <!-- Aqui você pode adicionar a sua imagem -->
                    <img src="https://i.postimg.cc/wjQk8dwr/gsaude.png" alt="Logo" width="70" height="70" class="rounded-circle">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" style="font-weight: bold;" href="?router=registro/sobre/">Sobre</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="?router=registro/home/">Sair</a>
                    </li>
                    </ul>
                </div>
            </div>

    </header>
    <body>
        
    <div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <img src="https://i.postimg.cc/PrzC7wyG/R.png" alt="Imagem Abaixo do Card" class="img-fluid">
        </div>
    </div>
</div>
 


    <div class="container custom-move-card">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-light rounded-3">
                <div class="card-body">
                    <h5 class="card-title custom-move">MARCAÇÃO DE EXAME</h5>
   
    <form id="appointmentForm">
        <div class="mb-3">
            <label for="selectBairro" class="form-label">Bairro</label>
            <select class="form-select" id="selectBairro" name="bairro">
                <option value="" data-default disabled selected> Selecione um Bairro</option>
                <option value="bairro1">Santo Amaro</option>
                <option value="bairro2">Iputinga</option>
                <option value="bairro3">Casa Amarela</option>
            </select>
        </div>

        <div class="mb-3" id="especialidadeSection" style="display: none;">
            <label for="selectEspecialidade" class="form-label">Especialidade</label>
            <select class="form-select" id="selectEspecialidade" name="especialidade">
                <option value="" data-default disabled selected> Selecione um Serviço</option>
                <option value="psiquiatra">Psiquiatra</option>
                <option value="cardiologista">Cardiologista</option>
                <option value="pediatra">Pediatra</option>
                <option value="neurologista">Neurologista</option>
                <option value="dermatologista">Dermatologista</option>
                <option value="ginecologista">Ginecologista</option>
            </select>
        </div>

        <div class="mb-3" id="medicoSection" style="display: none;">
            <label for="selectMedico" class="form-label">Médico</label>
            <select class="form-select" id="selectMedico" name="medico">
                <option value="" data-default disabled selected> Selecione um bairro</option>
                <option value="joao">João Francisco Neves</option>
                <option value="pedro">Pedro Alvarez Sales</option>
                <option value="katarina">Katarina Scarlat</option>
            </select>
        </div>

        <div class="mb-3" id="horarioSection" style="display: none;">
            <label for="checkboxHorario" class="form-label">Horário Disponível</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" value="8:00" id="horario8">
                <label class="form-check-label" for="horario8">8:00 AM - 9:00 AM</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" value="9:00" id="horario9">
                <label class="form-check-label" for="horario9">9:00 AM - 10:00 AM</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" value="10:00" id="horario10">
                <label class="form-check-label" for="horario10">10:00 AM - 11:00 AM</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" value="11:00" id="horario11">
                <label class="form-check-label" for="horario11">11:00 AM - 12:00 PM</label>
            </div>
        </div>

        <button type="button" class="btn btn-primary btn-block" id="submitButton" disabled>Agendar</button>
    </form>
</div>
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const selectBairro = document.getElementById('selectBairro');
    const especialidadeSection = document.getElementById('especialidadeSection');
    const selectEspecialidade = document.getElementById('selectEspecialidade');
    const medicoSection = document.getElementById('medicoSection');
    const selectMedico = document.getElementById('selectMedico');
    const horarioSection = document.getElementById('horarioSection');
    const submitButton = document.getElementById('submitButton');

    selectBairro.addEventListener('change', function () {
        if (selectBairro.value !== '') {
            especialidadeSection.style.display = 'block';
            selectEspecialidade.addEventListener('change', showMedicoSection);
        } else {
            hideSections([especialidadeSection, medicoSection, horarioSection]);
            resetSelects([selectEspecialidade, selectMedico]);
            removeEventListeners([selectEspecialidade]);
        }
    });

    function showMedicoSection() {
        if (selectEspecialidade.value !== '') {
            medicoSection.style.display = 'block';
            selectMedico.addEventListener('change', showHorarioSection);
        } else {
            hideSections([medicoSection, horarioSection]);
            resetSelects([selectMedico]);
            removeEventListeners([selectMedico]);
        }
    }

    function showHorarioSection() {
        if (selectMedico.value !== '') {
            horarioSection.style.display = 'block';
            submitButton.disabled = false;
        } else {
            hideSections([horarioSection]);
            submitButton.disabled = true;
        }
    }

    function hideSections(sections) {
        sections.forEach(section => {
            section.style.display = 'none';
        });
    }

    function resetSelects(selects) {
        selects.forEach(select => {
            select.value = '';
        });
    }

    function removeEventListeners(elements) {
        elements.forEach(element => {
            const clonedElement = element.cloneNode(true);
            element.parentNode.replaceChild(clonedElement, element);
        });
    }

    submitButton.addEventListener('click', function () {
        const horariosSelecionados = document.querySelectorAll('#horarioSection input[type=checkbox]:checked');
        if (horariosSelecionados.length === 0) {
            alert('Selecione pelo menos um horário disponível.');
        } else {
            alert('Agendamento realizado com sucesso!');
        }
    });
</script>

        
        </body>
</html>
