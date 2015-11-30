            <html>
            <head>
                <title>Intro- Catherine McMahon</title>
            </head>
            
            <body>
                <img id='doll' src='doll.jpg' style='display: none;position:absolute;' />
                <canvas id="drawing" style="border:1px solid #000000;">
                <img id='dress' src='dress.jpg' style='display:none; position:absolute;' />
                <img id='pants' src='pants.jpg' style='display:none' />
                
            </canvas>
            
            <script type="text/javascript" >
                var canvas = document.getElementById('drawing');
                canvas.width = 1000;
                canvas.height = 700;
                var context = canvas.getContext("2d");
                var drag = null;
                
                function grabImage(e){
                    var x1 = (140/2)+dress.clientX; 
                    var x2 = dress.clientX-(140/2); 
                    var y1 = (225/2)+dress.clientY; 
                    var y2= dress.clientY-(225/2); 
                    if (onmousedown == true){
                        if (onmousedown.clientX < x1 && onmousedown.clientX > x2){
                            if (onmousedown.clientY < y1 && onmousedown.clientY > y2){
                            drag = document.getElementById('dress');    
                            }
                        }
                    }
                }
                
                function dragImage(e) {
                    if( drag != null ){
                        drag.style.position = 'absolute';
                        drag.clientX = e.clientX;
                        drag.clientY = e.clientY;
                        make_base();
                    }
                }
                
                function dropImage(e){
                    drag = null;
                }
            
            function init() {
                var dress = document.getElementById('dress');
                dress.clientX = canvas.width - 460;
                dress.clientY = 110;
                make_base();
            }
            function make_base()
            {
                context.clearRect(0,0, canvas.width, canvas.height);
                var img = document.getElementById('doll');
                context.drawImage(img, 40, 20, 350, 640);
                img.mozImageSmoothingEnabled = true;
                img.webkitImageSmoothingEnabled = true;
                img.msImageSmoothingEnabled = true;
                img.imageSmoothingEnabled = true;
                context.font = "30px Cambria";
                context.fillText("YOUR MODEL",15,50);
                context.font = "30px Cambria";
                context.fillText("YOUR CLOSET",580,50);
                context.font = "19px Cambria";
                context.fillText("hint: drag and drop clothes to style her!",535,80);
                var dress = document.getElementById('dress');
                context.drawImage(dress, dress.clientX, dress.clientY, 140, 225);
                var pants = document.getElementById('pants');
                context.drawImage(pants, 755, 200, 140, 225);
            }
            
            window.onload = init;
            canvas.addEventListener('mousedown', grabImage, true);
            canvas.addEventListener('mousemove', dragImage, true);
            canvas.addEventListener('mouseup',dropImage, true);
            
    
            
    </script>
 </body>
</html>