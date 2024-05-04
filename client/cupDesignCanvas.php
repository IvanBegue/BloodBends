<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake Layers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='home.css'>
    <script src="https://kit.fontawesome.com/9fb62bcee2.js" crossorigin="anonymous"></script>

    <style>
        canvas {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-auto">
            <h6>Number of Layer(s):</h6>
            <input type="color" id="IntcolorPicker" class="form-control" value="#000000">
        </div>
        <div class="col-auto">
            <input type="number" id="layerCount" class="form-control" min="1" max="10">
        </div>
        <div class="col-auto">
            <button id="drawLayersButton">Draw Layers</button>
        </div>
    </div>

    <canvas id="cakeCanvas" width="400" height="400"></canvas>

    <div class="row justify-content-center tools">
        <div class="col-auto">
            <button id="undoButtonInterior">Undo</button>
        </div>
        <div class="col-auto">
            <button id="clearButtonInterior">Clear</button>
        </div>
        <div class="col-auto">
            <button id="saveInteriorButton">Save Layers Design</button>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        var interiorCanvas = document.getElementById("cakeCanvas");
        var interiorCtx = interiorCanvas.getContext("2d");
        var interiorImage = new Image();
        var previousCanvasStatesInterior = [];
        var isDrawing = false;
        var lastX = 0;
        var lastY = 0;
        var strokeColor = "#000000"; // Default color

        interiorImage.onload = function () {
            interiorCtx.drawImage(interiorImage, 0, 0, interiorCanvas.width, interiorCanvas.height);
        };

        interiorImage.src = "../images/cup.png";

        document.getElementById("drawLayersButton").addEventListener("click", drawCakeInterior);
        document.getElementById("undoButtonInterior").addEventListener("click", undoInteriorCanvas);
        document.getElementById("clearButtonInterior").addEventListener("click", clearInteriorCanvas);
        document.getElementById("saveInteriorButton").addEventListener("click", saveInteriorCanvas);

        document.getElementById("IntcolorPicker").addEventListener("change", function() {
            strokeColor = this.value;
        });

        interiorCanvas.addEventListener("mousedown", startDrawing);
        interiorCanvas.addEventListener("mousemove", draw);
        interiorCanvas.addEventListener("mouseup", stopDrawing);
        interiorCanvas.addEventListener("mouseout", stopDrawing);

        function drawCakeInterior() {
            // Clear the canvas before drawing
            interiorCtx.clearRect(0, 0, interiorCanvas.width, interiorCanvas.height);
            interiorCtx.drawImage(interiorImage, 0, 0, interiorCanvas.width, interiorCanvas.height);
        }

        function startDrawing(e) {
            isDrawing = true;
            [lastX, lastY] = [e.offsetX, e.offsetY];
        }

        function draw(e) {
            if (!isDrawing) return;
            interiorCtx.strokeStyle = strokeColor;
            interiorCtx.lineWidth = 2;
            interiorCtx.lineJoin = "round";
            interiorCtx.lineCap = "round";
            interiorCtx.beginPath();
            interiorCtx.moveTo(lastX, lastY);
            interiorCtx.lineTo(e.offsetX, e.offsetY);
            interiorCtx.stroke();
            [lastX, lastY] = [e.offsetX, e.offsetY];
        }

        function stopDrawing() {
            if (!isDrawing) return;
            isDrawing = false;
            saveCanvasState();
        }

        function saveCanvasState() {
            var currentState = interiorCtx.getImageData(0, 0, interiorCanvas.width, interiorCanvas.height);
            previousCanvasStatesInterior.push(currentState);
        }

        function undoInteriorCanvas() {
            if (previousCanvasStatesInterior.length > 0) {
                previousCanvasStatesInterior.pop(); // Remove the last state
                if (previousCanvasStatesInterior.length > 0) {
                    var prevState = previousCanvasStatesInterior[previousCanvasStatesInterior.length - 1];
                    interiorCtx.clearRect(0, 0, interiorCanvas.width, interiorCanvas.height);
                    interiorCtx.putImageData(prevState, 0, 0);
                } else {
                    clearInteriorCanvas(); // If there are no more states, clear canvas
                }
            }
        }

        function clearInteriorCanvas() {
            interiorCtx.clearRect(0, 0, interiorCanvas.width, interiorCanvas.height);
            interiorCtx.drawImage(interiorImage, 0, 0, interiorCanvas.width, interiorCanvas.height);
            previousCanvasStatesInterior = [];
        }

        function saveInteriorCanvas() {
            // Get the canvas data
            var canvasData = interiorCanvas.toDataURL();
            // Get the strokes data
            var strokesData = JSON.stringify(previousCanvasStatesInterior);

            // Send canvas data and strokes data to PHP via AJAX
            $.ajax({
                type: 'POST',
                url: '<?php echo $_SERVER["PHP_SELF"]; ?>',
                data: {
                    canvasData: canvasData,
                    strokesData: strokesData,
                    saveCanvas: true
                },
                success: function(response) {
                    console.log('Canvas data saved successfully:', response);
                    // You can handle the response here (e.g., display a success message)
                },
                error: function(xhr, status, error) {
                    console.error('Error saving canvas data:', error);
                    // You can handle the error here (e.g., display an error message)
                }
            });
        }
    </script>

    <?php
    // PHP code to handle saving
if (isset($_POST['saveCanvas'])) {
    // Retrieve canvas data and strokes data from POST request
    $canvasData = $_POST['canvasData'];
    $strokesData = $_POST['strokesData'];

    // Decode canvas data (if needed)
    $canvasImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $canvasData));

    // Save canvas data to a file or database (example: saving to a file)
    $filename = 'saved_canvas.png'; // Set the file name
    file_put_contents($filename, $canvasImage);

    // Save strokes data to a file or database (example: saving to a file)
    if (!empty($strokesData)) {
        $strokesFilename = 'saved_strokes.json'; // Set the file name
        file_put_contents($strokesFilename, $strokesData);
    }

    // Respond with a success message (or any other response)
    echo 'Canvas data saved successfully';
}

    ?>
</body>
</html>
