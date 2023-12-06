@props([
    'templates'
])

<style>
    .carousel-control-next,
    .carousel-control-prev /*, .carousel-indicators */ {
        filter: invert(100%);
    }
</style>

<x-default-layout>
    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="row container-xl">

            <div class="col-sm-6 pe-0">
                <div id="canvas-container" class="card d-flex align-items-center">
                </div>
            </div>

            <div class="col-sm-6 ps-0">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">Templates</h5>

                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php
                                    $totalImages = count($templates);
                                    $itemsPerSlide = 3;

                                    // Lógica para dividir as imagens em slides
                                    for ($i = 0; $i < $totalImages; $i += $itemsPerSlide) {
                                        echo '<div class="carousel-item ' . (($i === 0) ? 'active' : '') . '">';
                                        echo '<div class="row">';
                                        for ($j = $i; $j < min($i + $itemsPerSlide, $totalImages); $j++) {
                                            echo '<div class="col-md-4" onclick="trocarImagem(\'' . $templates[$j]['path_template'] . '\')">';
                                            echo '<img src="' . $templates[$j]['path_template'] . '" class="d-block img-fluid" alt="Imagem ' . ($j + 1) . '">';
                                            echo '</div>';
                                        }
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <button class="carousel-control-prev mt-3" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true" style="color: black"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next mt-3" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true" style="color: black"></span>
                                <span class="visually-hidden">Próximo</span>
                            </button>
                        </div>

                        <a href="#" class="btn btn-primary mt-5" onclick="downloadCanvas()">Salvar Meme</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        let init = true;
        let img;
        let inputs = [];

        function trocarImagem(url) {
            loadImage(url, function (novaImagem) {
                img = novaImagem;
                setup();
            });
        }

        function setup() {
            if(init) {
                canvas = createCanvas(550, 700);
                canvas.parent('canvas-container');

                init = false;
                return;
            }

            canvas = createCanvas(550, 700);
            canvas.parent('canvas-container');

            let imgScale = min(width / img.width, height / img.height);

            // Calcula as novas dimensões da imagem
            let newWidth = img.width * imgScale;
            let newHeight = img.height * imgScale;

            // Calcula as posições para centralizar a imagem
            let posX = (width - newWidth) / 2;
            let posY = (height - newHeight) / 2;

            // Exibe a imagem no canvas
            image(img, posX, posY, newWidth, newHeight);

            for (let i = 0; i < inputs.length; i++) {
                inputs[i].remove();
            }

            canvas.mousePressed(mostrarCampo);
        }

        function mostrarCampo() {
            input = createInput();
            input.parent('canvas-container');
            input.position(mouseX, mouseY);

            input.style('z-index', '10');
            input.style('background', 'rgba(255, 255, 255, 0.4)');
            input.style('border', '0');
            input.style('padding', '0 10px 0 10px');
            input.style('font-size', '58px');
            input.style('font-weight', 'bold');
            input.style('text-align', 'center');
            input.style('color', 'black');

            inputs.push(input);
        }

        function downloadCanvas() {
            textSize(58)
            textAlign(CENTER, CENTER)
            strokeWeight(10);

            let divWidth = document.getElementById('canvas-container').offsetWidth;
            let divHeight = document.getElementById('canvas-container').offsetHeight;

            console.log(inputs)
            console.log((inputs[0].x + inputs[0].width + (divWidth - 550)))
            console.log((inputs[0].y + inputs[0].height + (divHeight - 700)))

            for (let i = 0; i < inputs.length; i++) {
                text(inputs[i].value(), (inputs[i].x + (568/4) + (divWidth - 550)), (inputs[i].y + (77/2) + (divHeight - 700)))
            }

            for (let i = 0; i < inputs.length; i++) {
                inputs[i].remove();
            }

            saveCanvas('meme')
        }
    </script>
</x-default-layout>
